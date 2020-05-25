@extends('user.layouts.app')
@section('content')
@if (session('success'))
    <div class="alert alert-success">
        {{session('success')}}
    </div>
@endif
@if (session('error'))
    <div class="alert alert-warning">
        {{session('error')}}
    </div>
@endif
    <div class="row">
        <div class="col-md-2">
            @if (Auth::user()!=null)
            @component('user.layouts.sidebar');
                
            @endcomponent          
            @endif
        </div>
        <div class="col-md-10">
            <div class="row">
                
                
            </div>
            
        </div>
    </div>
@endsection