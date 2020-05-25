@extends('user.layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-2">
            @component('user.layouts.sidebar');
                
            @endcomponent
        </div>
        <div class="col-md-10">
            <div class="row">
                <div class="col-sm-11">
                    <div class="card">
                        <div class="card-header">{{ __('Products') }}</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-4">
                                <p class="text-center">{{ __('Name') }}</p></div>
                                <div class="col-sm-6"><p class="text-center">Price</p>
                                </div>
                                
                            </div>
                            @foreach ($products as $product)
                                <div class="row">
                                    <div class="col-sm-4">
                                    <p class="text-center"><a href={{ route('product', ['product'=> $product->id, 'lang' => app()->getLocale()]) }}>{{$product->name}}</a></p></div>
                                    <div class="col-sm-6"><p class="text-center">{{number_format($product->price, 2, ',', ' ')}} zł</p>
                                    </div>
                                    
                                </div>
                            @endforeach
                            <div class="row">
                                <div class="ol-md-6 offset-md-4">
                                    <div style="margin: 0 auto;">
                                        {{ $products->links() }}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>
    </div>
@endsection