<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }


    public function profile($id){
        $user=User::findOrFail($id);
        return view('frontend.pages.profile' , compact('user'));
    }

    public function profileUpdate(UserRequest $request){
        $user = User::findOrFail(auth()->user()->id);
        $array = [];
        if($request->email != $user->email){
            $email = User::where('email' , $request->email)->first();
            if($email == null){
                $array['email'] =  $request->email;
            }
        }
        if($request->name != $user->name){
            $array['name'] =  $request->name;
        }

        if($request->avatar != $user->avatar){
            $array['avatar'] =  $request->avatar;
        }

        if($request->password != ''){
            $array['password'] =  Hash::make($request->password);
        }
        if(!empty($array)){
            $user->update($array);
        }
        alert()->success('Your Profile Has Been Updated' , 'Done');
        return redirect()->route('profile' , ['id' => $user->id]);
    }



}
