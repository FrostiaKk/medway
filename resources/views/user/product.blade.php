@extends('user.layouts.app')

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
                            <h2>Price: {{number_format($product->price, 2, ',', ' ')}} zł</h2>         
                        </div>
                        <div class="text-center">
                        <a href="/product/{{$product->id}}/edit" class="btn btn-md btn-primary">Add to carts</a>       
                        </div>
                         </p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
@endsection












