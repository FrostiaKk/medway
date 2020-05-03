<?php

use App\Basket;
use Illuminate\Database\Seeder;

class BasketTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $basket= new Basket;
        $basket->user_id=1;
        $basket->product_id=1;
        $basket->save();
    }
}
