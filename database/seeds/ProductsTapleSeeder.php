<?php
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTapleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'name'=>'MacBook Pro',
            'slug'=>'macbook-pro',
            'price'=>24000,
            'details'=>'15 inch 1T SSD',
            'description'=>'Seeder created successfullySeeder created successfully',
        ]);


        Product::create([
            'name'=>'LabTop1',
            'slug'=>'laptop-top1',
            'price'=>24000,
            'details'=>'15 inch 1T SSD',
            'description'=>'Seeder created successfullySeeder created successfully',
        ]);


        Product::create([
            'name'=>'LapTop2',
            'slug'=>'laptop-top2',
            'price'=>24000,
            'details'=>'15 inch 1T SSD',
            'description'=>'Seeder created successfullySeeder created successfully',
        ]);


        Product::create([
            'name'=>'Iphone',
            'slug'=>'Iphone12pro',
            'price'=>24000,
            'details'=>'1T SSD',
            'description'=>'Seeder created successfullySeeder created successfully',
        ]);

    }
}

