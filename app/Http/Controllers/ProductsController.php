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

    public function show( $ss,Product $product)
    {
        //dd($product);
        return view('user/product', ['product' => $product]);
    }

    public function edit($ss, Product $product)
    {
        $basket=\App\Basket::where('product_id', $product['id'])->where('user_id', Auth::user()->id)->first();
        if($basket==null)
        {
            $basket= new \App\Basket;
            $basket->user_id=Auth::user()->id;
            $basket->product_id=$product['id'];
            $basket->save();
        }else{
            $basket->quantity++;
            $basket->save();
        }

        return redirect()->route('product', ['product'=> $product->id, 'lang' => app()->getLocale()])->with('success', __('Successfully Added To Carts'));

    }
}
