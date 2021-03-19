<?php

use App\Coupon;
use Illuminate\Database\Seeder;

class CouponsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Coupon::create(
            [
            'code' => 'ABC123',
            'type' => 'fixed',
            'value' => 300,
            ]);

        Coupon::create([
            'code' => 'NOOR57',
            'type' => 'percent',
            'percent_off' => 50,
        ]);

        Coupon::create([
            'code' => 'YARO2018',
            'type' => 'percent',
            'percent_off' => 25,
        ]);
    }
}
