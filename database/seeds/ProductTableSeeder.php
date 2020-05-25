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
        $product->name='Produkt1';
        $product->price=25123123;
        $product->amount=20;
        $product->save();

        $product = new Product;
        $product->name='Produkt2';
        $product->price=225;
        $product->amount=230;
        $product->save();

        $product = new Product;
        $product->name='Produkt3';
        $product->price=250;
        $product->amount=20;
        $product->save();

        $product = new Product;
        $product->name='Produkt4';
        $product->price=215;
        $product->amount=220;
        $product->save();

        $product = new Product;
        $product->name='Produkt5';
        $product->price=15;
        $product->amount=10;
        $product->save();

        $product = new Product;
        $product->name='Produkt6';
        $product->price=26;
        $product->amount=28;
        $product->save();

        $product = new Product;
        $product->name='Produkt7';
        $product->price=29;
        $product->amount=0;
        $product->save();

        $product = new Product;
        $product->name='Produkt8';
        $product->price=29;
        $product->amount=6;
        $product->save();

        $product = new Product;
        $product->name='Produkt9';
        $product->price=29;
        $product->amount=9;
        $product->save();

        $product = new Product;
        $product->name='Produkt10';
        $product->price=29;
        $product->amount=10;
        $product->save();

        $product = new Product;
        $product->name='Produkt11';
        $product->price=29;
        $product->amount=1;
        $product->save();

        
    }
}
