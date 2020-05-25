<?php

namespace App\Http\Controllers;

use PDF;
use App\UserOrder;
use App\Mail\OrderMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function store(Request $request) {
        $request->validate([
            'firstname' => ['required', 'string'],
            'lastname' => ['required', 'string'],
            'email' => ['required', 'email'],
            'street' => 'required',
            'city' => ['required', 'string'],
            'zipcode' => ['required'], //PostalCode::forCountry('PL')-Nie zainstalowane
            'phonenumber' => ['required', 'min:9', 'max:9'],
            'nip' => ['required', 'min:10', 'max:10'],

        ]);
        
        $user=Auth::user();
        $baskets=$user->baskets;
        $checkIfError=0;
        $errorItems=' ';
        if($baskets->last()==null)return redirect('/home')->with('error', __('Sorry, your cart is empty'));
        foreach ($baskets as $basket) {
            if($basket->product->amount < $basket->quantity){
                $errorItems .= $basket->product->name;
                $errorItems .= ' ';
                \App\Basket::where('id', $basket->id)->delete();
                $checkIfError=1;
            }
        }

        if ($checkIfError==1) {
            return redirect('/home')->with('error', __('Sorry, we are out of stock on these products:'). $errorItems);
        }

        $last=\App\UserOrder::all()->last();
        $userorder=new \App\UserOrder;
        
        if ($last==null) {
            $userorder->id=1;
        }else{
            $value=$last->id;
            $value=$value+1;
            $userorder->id=$value;
        }
        
        foreach ($baskets as $basket) {
            $order= new \App\Order;
            $order->product_id=$basket->product_id;
            $order->user_id=$basket->user_id;
            $order->quantity=$basket->quantity;
            $order->userorder_id=$userorder->id;
            $order->save();
            \App\Product::where('id', $basket->product_id)->update(array('amount' => $basket->product->amount - $basket->quantity));
            \App\Basket::where('id', $basket->id)->delete();
            
        }
        $userorder->firstname=$request['firstname'];
        $userorder->lastname=$request['lastname'];
        $userorder->street=$request['street'];
        $userorder->city=$request['city'];
        $userorder->zipcode=$request['zipcode'];
        $userorder->phone=$request['phonenumber'];
        $userorder->email=$request['email'];
        $userorder->nip=$request['nip'];
        $userorder->save();
        $pdf = PDF::loadView('pdf.pdf', compact('userorder'));
        Mail::to($request['email'])->send(new OrderMail($pdf, $userorder));
        return redirect('/home')->with('success', __('Successfully Ordered'));
    }
}
