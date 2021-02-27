<?php
use App\Product;
use Illuminate\Database\Seeder;

class ProductsTapleSeeder extends Seeder
{

    public function run()
    {

        // Laptops
        for ($i=1; $i <= 12; $i++) {
            Product::create([
                'name' => 'Laptop '.$i,
                'slug' => 'laptop-'.$i,
                'details' => [13,14,15][array_rand([13,14,15])] . ' inch, ' . [1, 2, 3][array_rand([1, 2, 3])] .' TB SSD, 32GB RAM',
                'price' => rand(1000, 1999),
                'quantity' => rand(2, 5),
                'description' =>'Lorem '. $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
//                'image' => 'products/dummy/laptop-'.$i.'.jpg',
//                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',

//            ])->categories()->attach(1);
            ])->categories()->attach(1);
        }

        // Make Laptop 1 a Desktop as well. Just to test multiple categories
//        $product = Product::find(1);
//        $product->categories()->attach(2);

        // Smart Watch
        for ($i = 1; $i <= 11; $i++) {
            Product::create([
                'name' => 'Smartwatch ' . $i,
                'slug' => 'smartwatch-' . $i,
                'details' =>'Carrier Subscription inch screen, 4GHz Quad Core',
                'description' => 'Willful Smart Watch for Android Phones and iOS Phones Compatible iPhone Samsung, IP68 Swimming Waterproof Smartwatch Fitness Tracker Fitness Watch Heart Rate Monitor Watches for Women (Dark Purple)',
                'price' => rand(20, 80),
                'quantity' => rand(2, 5),
//                'image' => 'products/dummy/desktop-'.$i.'.jpg',
//                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
                ])->categories()->attach(8);
        }

        // Phones
        for ($i = 1; $i <= 12; $i++) {
            Product::create([
                'name' => 'Phone ' . $i,
                'slug' => 'phone-' . $i,
                'details' =>'New Apple iPhone 12 Pro Max (128GB, Pacific Blue) [Locked],4GHz Quad Core',
                'price' => rand(999, 1999),
                'quantity' => rand(2, 5),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit., asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
//                'image' => 'products/dummy/phone-'.$i.'.jpg',
//                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
//                ])->categories()->attach(3);

            ])->categories()->attach(3);
        }

        // Tablets
        for ($i = 1; $i <= 14; $i++) {
            Product::create([
                'name' => 'Tablet ' . $i,
                'slug' => 'tablet-' . $i,
                'details' =>'New Apple iPhone 12 Pro Max (128GB, Pacific Blue) [Locked],4GHz Quad Core',
                'description' => 'Android tablets possess plenty of allure, standing out among its competitors with more than just a ‘pretty face’,inch screen, 4GHz Quad Core',
                'price' => rand(299, 499),
                'quantity' => rand(2, 5),
//                'image' => 'products/dummy/tablet-'.$i.'.jpg',
//                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
//            ])->categories()->attach(4);
            ])->categories()->attach(4);;
        }

        // TVs
        for ($i = 1; $i <= 12; $i++) {
            Product::create([
                'name' => 'TV ' . $i,
                'slug' => 'tv-' . $i,
                'details' => 'TCL 32" 3-Series 720p Roku Smart TV - 32S335,inch screen, Smart TV, 4K',
                'price' => rand(299, 399),
                'quantity' => rand(1, 5),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
//                'image' => 'products/dummy/tv-'.$i.'.jpg',
//                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
//            ])->categories()->attach(5);
            ])->categories()->attach(5);
        }

        // Cameras
        for ($i = 1; $i <= 12; $i++) {
            Product::create([
                'name' => 'Camera ' . $i,
                'slug' => 'camera-' . $i,
                'details' => 'Full Frame DSLR, with 18-55mm kit lens.',
                'price' => rand(80, 199),
                'quantity' => rand(2, 5),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
//                'image' => 'products/dummy/camera-'.$i.'.jpg',
//                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
//            ])->categories()->attach(6);
            ])->categories()->attach(6);
        }

        // Headphone
        for ($i = 1; $i <= 12; $i++) {
            Product::create([
                'name' => 'Headphone ' . $i,
                'slug' => 'headphone-' . $i,
                'details' => 'MDRZX110/BLK ZX Series Stereo Headphones (Black)!',
                'price' => rand(20,90 ),
                'quantity' => rand(1, 5),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
//                'image' => 'products/dummy/appliance-'.$i.'.jpg',
//                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
//            ])->categories()->attach(7);
            ])->categories()->attach(7);
        }


        // Video Games
        for ($i = 1; $i <= 12; $i++) {
            Product::create([
                'name' => 'VideoGame ' . $i,
                'slug' => 'video-game-' . $i,
                'details' => 'PS5 | The future of gaming!',
                'price' => rand(999, 3999),
                'quantity' => rand(1, 5),
                'description' => 'Lorem ' . $i . ' ipsum dolor sit amet, consectetur adipisicing elit. Ipsum temporibus iusto ipsa, asperiores voluptas unde aspernatur praesentium in? Aliquam, dolore!',
//                'image' => 'products/dummy/appliance-'.$i.'.jpg',
//                'images' => '["products\/dummy\/laptop-2.jpg","products\/dummy\/laptop-3.jpg","products\/dummy\/laptop-4.jpg"]',
//            ])->categories()->attach(7);
            ])->categories()->attach(2);
        }

        // Select random entries to be featured
        Product::whereIn('id', [1, 12, 22, 31, 41, 43, 47, 51, 53,61, 69, 73, 80])->update(['featured' => true]);
    }


}

