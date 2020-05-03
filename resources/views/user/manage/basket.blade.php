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
        <div class="col-sm-5">
            <div class="card">
                <div class="card-body">
                    <button class="btn btn-block btn-primary mb-2" id="show-new-order-info-form">Fill User Data</button>
                    @component('user.layouts.component.send_order')
                
                    @endcomponent
                </div>
            </div>
        </div>
        <div class="col-sm-5">
            <div class="card mr-3">
                <div class="card-header">
                    Current Users
                </div>
                <table class="table table-bordered table-striped mb-0">
                   
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @php $i=0; @endphp
                            @if ($products)
                            @foreach ($products as $product)
                            <tr>
                                <td>{{$i=$i+1}}</td>
                                <td>{{$product->product->name}}</td>
                                <td>{{number_format($product->product->price, 2, ',', ' ')}} zł</td>
                                <td>
                                    <a href="#" class="btn btn-succes deletebtn">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                            @endif
                        </tbody>
                </table>
            </div>
        </div>
    </div>
    {{-- /.row --}}
    {{--Modals--}}
    <div id="delete-product-modal" class="modal-cont">
        <div class="row">
            <div class="col-sm-6 offset-sm-3" id>
                <div class="card mt-5">
                    <div class="card-header">
                        Are you sure you want to Delete Product?  <span class="float-right closebtn" id="close-edit-details-modal" style="cursor: pointer; color: red"><b>X</b></span>
                    </div>
                    <div class="card-body">
                    <form action="/delete" method="POST" id="deleteProduct">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="id" id="delete_id" hidden>
                            </div>    
                            <button class="btn btn-primary btn-block mt-2">Delete</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@push('user.layouts.scripts.scripts')
<script src="{{  asset('js/user/users.js') }}"></script>
@endpush
@push('user.layouts.styles')
<link rel="stylesheet" href="{{ asset('css/user/user.css') }}">
@endpush