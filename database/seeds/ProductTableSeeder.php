<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product = new Product;
        $product->name='Drzwi';
        $product->price=25123123;
        $product->amount=20;
        $product->save();

        $product = new Product;
        $product->name='Drzwi1';
        $product->price=225;
        $product->amount=230;
        $product->save();

        $product = new Product;
        $product->name='Drzwi3';
        $product->price=250;
        $product->amount=20;
        $product->save();

        $product = new Product;
        $product->name='Okno';
        $product->price=215;
        $product->amount=220;
        $product->save();

        $product = new Product;
        $product->name='Okno1';
        $product->price=15;
        $product->amount=10;
        $product->save();

        $product = new Product;
        $product->name='Okno2';
        $product->price=26;
        $product->amount=28;
        $product->save();

        $product = new Product;
        $product->name='Okno3';
        $product->price=29;
        $product->amount=6;
        $product->save();
    }
}
