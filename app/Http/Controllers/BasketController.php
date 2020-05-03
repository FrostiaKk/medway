<?php

namespace App\Http\Controllers;

use App\Basket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BasketController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index() {
        $user = Auth::user();
        $products=$user->find(1)->baskets;

        return view('/user/manage/basket', ['products' => $products]);
    }

    public function store(Request $request) {
        $request->validate([
            'id' => 'required',
        ]);
        $user = Auth::user();
        \App\Basket::where('product_id', $request['id'])->first()->delete();
        $products=$user->find(1)->baskets;
        return view('/user/manage/basket', ['products' => $products])->with('success', 'Successfully deleted a Product from your basket ');
    }
}
