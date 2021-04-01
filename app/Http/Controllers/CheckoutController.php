<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckoutRequest;
use App\Models\Product;
use App\Models\Order;
use App\Models\OrderProduct;
use Cartalyst\Stripe\Exception\CardErrorException;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Http\Response|\Illuminate\View\View
     */
    public function index()
    {
        $tax=config('cart.tax')/100;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $code = session()->get('coupon')['name'] ?? null;
        $newSubtotal = (Cart::subtotal() - $discount);
        if ($newSubtotal < 0) {
            $newSubtotal = 0;
        }
        $newTax = $newSubtotal * $tax;
        $newTotal = $newSubtotal * (1 + $tax);
        $newSubtotal = (Cart::subtotal() - $discount);
        if ($newSubtotal < 0) {
            $newSubtotal = 0;
        }

        $gateway = new \Braintree\Gateway([
            'environment' => config('services.braintree.environment'),
            'merchantId' => config('services.braintree.merchantId'),
            'publicKey' => config('services.braintree.publicKey'),
            'privateKey' => config('services.braintree.privateKey')
        ]);

        try {
            $paypalToken = $gateway->ClientToken()->generate();
        } catch (\Exception $e) {
            $paypalToken = null;
        }
//        return view('frontend.pages.checkout')->with([
////            'paypalToken' =>$paypalToken,
//            'discount' => $discount,
//            'newSubtotal' => $newSubtotal,
//            'newTax' =>$newTax,
//            'newTotal' =>$newTotal,
//            'tax' =>$tax,
//        ]);
        return view('frontend.pages.checkout',compact('newTotal'));
//        return view("frontend.pages.checkout",compact('newTotal'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Http\Response
     */
    public function store(CheckoutRequest $request)
    {
        $contents =Cart::content()->map(function ($item){
            return $item->model->slug.', '.$item->qty;
        })->values()->toJson();

//        try {
//            $charge = Stripe::charges()->create([
//                'amount' => Cart::total()/ 100,
//                'currency' => 'usd',
//                'source' => $request->stripeToken,
//                'description' => 'Order',
//                'receipt_email' => $request->email,
//                'metadata' => [
//                    'contents' => $contents,
//                    'quantity' => Cart::instance('default')->count(),
//                    'discount' => collect(session()->get('coupon'))->toJson(),
//                ],
//            ]);

            //insert into order table
            $order = Order::create([
                'user_id' => auth()->user() ? auth()->user()->id : null,
                'billing_email' => $request->email,
                'billing_name' => $request->name,
                'billing_address' => $request->address,
                'billing_city' => $request->city,
                'billing_postalcode' => $request->postalcode,
                'billing_phone' => $request->phone,
                'billing_name_on_card' => $request->name_on_card,
                'billing_discount' => getNumbers()->get('discount'),
                'billing_discount_code' => getNumbers()->get('code'),
                'billing_subtotal' => getNumbers()->get('newSubtotal'),
                'billing_tax' => getNumbers()->get('newTax'),
                'billing_total' => getNumbers()->get('newTotal'),
                'error' => null,
            ]);

            // Insert into order_product table
            foreach (Cart::content() as $item) {
                OrderProduct::create([
                    'order_id' => $order->id,
                    'product_id' => $item->model->id,
                    'quantity' => $item->qty,
                ]);
            }
//          Cart::instance('default')->destroy();
            session()->forget('coupon');
            return redirect()->route('checkout.stripe',Cart::total(2,'.',','))->with('success_message', 'Thank you! Your payment has been successfully accepted!');

//            return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
//           } catch (CardErrorException $e) {
//               return back()->withErrors('Error!',$e->getMessage());
//             }
    }

//    public function paypalCheckout(Request $request)
//    {
//        // Check race condition when there are less items available to purchase
//        if ($this->productsAreNoLongerAvailable()) {
//            return back()->withErrors('Sorry! One of the items in your cart is no longer avialble.');
//        }
//
//        $gateway = new \Braintree\Gateway([
//            'environment' => config('services.braintree.environment'),
//            'merchantId' => config('services.braintree.merchantId'),
//            'publicKey' => config('services.braintree.publicKey'),
//            'privateKey' => config('services.braintree.privateKey')
//        ]);
//
//        $nonce = $request->payment_method_nonce;
//
//        $result = $gateway->transaction()->sale([
//            'amount' => round(getNumbers()->get('newTotal') / 100, 2),
//            'paymentMethodNonce' => $nonce,
//            'options' => [
//                'submitForSettlement' => true
//            ]
//        ]);
//
//        $transaction = $result->transaction;
//
//        if ($result->success) {
//            $order = $this->addToOrdersTablesPaypal(
//                $transaction->paypal['payerEmail'],
//                $transaction->paypal['payerFirstName'].' '.$transaction->paypal['payerLastName'],
//                null
//            );
//
//            Mail::send(new OrderPlaced($order));
//
//            // decrease the quantities of all the products in the cart
//            $this->decreaseQuantities();
//
//            Cart::instance('default')->destroy();
//            session()->forget('coupon');
//
//            return redirect()->route('confirmation.index')->with('success_message', 'Thank you! Your payment has been successfully accepted!');
//        } else {
//            $order = $this->addToOrdersTablesPaypal(
//                $transaction->paypal['payerEmail'],
//                $transaction->paypal['payerFirstName'].' '.$transaction->paypal['payerLastName'],
//                $result->message
//            );
//
//            return back()->withErrors('An error occurred with the message: '.$result->message);
//        }
//    }

    protected function addToOrdersTables($request, $error)
    {
        // Insert into orders table
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $request->email,
            'billing_fname' => $request->fname,
            'billing_lname' => $request->lname,
            'billing_address' => $request->address,
            'billing_city' => $request->city,
            'billing_postalcode' => $request->postcode,
            'billing_phone' => $request->phone,
            'billing_name_on_card' => $request->name_on_card,
            'billing_discount' =>getNumbers()->get('discount'),
            'billing_discount_code' =>getNumbers()->get('code'),
            'billing_subtotal' =>getNumbers()->get('newSubtotal'),
            'billing_tax' =>getNumbers()->get('newTax'),
            'billing_total' =>getNumbers()->get('newTotal'),
        ]);

        // Insert into order_product table
        foreach (Cart::content() as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->qty,
            ]);
        }

        return $order;
    }

    protected function addToOrdersTablesPaypal($email, $fname,$lname,$error)
    {
        // Insert into orders table
        $order = Order::create([
            'user_id' => auth()->user() ? auth()->user()->id : null,
            'billing_email' => $email,
            'billing_fname' => $fname,
            'billing_lname' => $lname,
            'billing_discount' => getNumbers()->get('discount'),
            'billing_discount_code' => getNumbers()->get('code'),
            'billing_subtotal' => getNumbers()->get('newSubtotal'),
            'billing_tax' => getNumbers()->get('newTax'),
            'billing_total' => getNumbers()->get('newTotal'),
            'error' => $error,
            'payment_gateway' => 'paypal',
        ]);

        // Insert into order_product table
        foreach (Cart::content() as $item) {
            OrderProduct::create([
                'order_id' => $order->id,
                'product_id' => $item->model->id,
                'quantity' => $item->model->quantity,
            ]);
        }

        return $order;
    }

    protected function decreaseQuantities()
    {
        foreach (Cart::content() as $item) {
            $product = Product::find($item->model->id);

            $product->update(['quantity' => $product->quantity - $item->qty]);
        }
    }

    protected function productsAreNoLongerAvailable()
    {
        foreach (Cart::content() as $item) {
            $product = Product::find($item->model->id);
            if ($product->quantity < $item->qty) {
                return true;
            }
        }

        return false;
    }

    public function checkout($amount){

        return view('frontend.pages.checkout_byStripe',compact('amount'));
    }

    public function charge(Request $request){
        Stripe::setApiKey('sk_test_51IWeaaGbZUDH5gEQ4etkzdwrzyDLk5zP9L5qJ8v8Wd0n1jL7OKJJPsoBUiyasewYltxaZjEJKSeGcuKaiCof3xUY00QJpzvJKM');
        $token = $_POST['stripeToken'];
        $charge=Stripe::charges()->create([
            'amount' => $request->amount,
            'currency' => 'usd',
            'description' => 'Dragon.com Store ',
            'source' => $token,
        ]);

        $chargeId=$charge['id'];

        if($chargeId){

            session()->forget('cart');
            return redirect()->route('confirmation.index')->with('success',"Payment was done. Thanks");
        } else{
            return redirect()->back();
        }

    }

}
