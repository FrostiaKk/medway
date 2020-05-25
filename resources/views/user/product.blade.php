@extends('layouts.app')

@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
    <div class="row">
        <div class="col-md-2">
            @component('user.layouts.sidebar');
                
            @endcomponent
        </div>
        <div class="col-md-10">
            <div class="row pt-2 pb-4">
                <div class="col-6 offset-3">
                    <div>
                         <p>
                            <div class="text-center">
                              <h2>{{$product->name}}</h2>         
                          </div>
                          <div class="text-center">
                            <h2>{{ __('Price') }}: {{number_format($product->price, 2, ',', ' ')}} zł</h2>         
                        </div>
                        <div class="text-center">
                            <h2>{{ __('Stock') }}: {{$product->amount}}</h2>         
                        </div>
                        <div class="text-center">
                            @if ($product->amount==0)
                            <button class="btn btn-md btn-primary" disabled>{{ __('Add to carts') }}</button>  
                            @else
                            <a href="{{ route('product.edit', ['product'=> $product->id, 'lang' => app()->getLocale()]) }}" class="btn btn-md btn-primary" {{$product->amount<1 ? 'disabled' : ''}}>{{ __('Add to carts') }}</a>
                            @endif
                               
                        </div>
                         </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection












