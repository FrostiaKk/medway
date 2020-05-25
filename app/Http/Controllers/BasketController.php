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
    public function index(Request $request) {
        $user = Auth::user();
        $products=$user->baskets;
        return view('/user/manage/basket', ['products' => $products]);
    }

    public function store(Request $request) {
        $request->validate([
            'id' => 'required',
        ]);
        $user = Auth::user();
        $products=$user->baskets;
        $check=\App\Basket::where('id', $request['id'])->first();
        if($check != null){
            \App\Basket::where('id', $request['id'])->first()->delete();
        }else{
            return redirect('/basket');
        }  
        return redirect()->route('basket', app()->getLocale())->with('success', __('Successfully deleted a Product from your basket'));
    }
}
