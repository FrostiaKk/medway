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
            <div class="row">
                
                
            </div>
            
        </div>
    </div>
@endsection