<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        $products=Product::paginate(4);
        return view('user/index', ['products' => $products]);
    }

    public function show(Product $product)
    {
        return view('user/product', compact('product'));
    }

    public function edit(Product $product)
    {
        $basket= new \App\Basket;
        $basket->user_id=Auth::user()->id;
        $basket->product_id=$product['id'];
        $basket->save();

        return redirect('/product/'.$product['id'])->with('success', 'Successfully Added To Carts ');

    }
}
