@extends('layouts.base')
@section('title')
    Products
@endsection
@section('content')     
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
    <h1>All Products</h1>
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4 col-sm-12 mb-3">
                    <div class="card text-start">
                        <div class="card-body">
                            <h4 class="card-title">{{ $product->product_name }}</h4>
                            <p class="card-text">{{ $product->product_desc }}</p>
                            <p class="card-text">{{ $product->price }}</p>
                            <a href="{{route('products.edit',['product'=> $product->id])}}" class="btn btn-warning">Edit</a>
                            
                            <form action="{{ route('products.destroy', ['product' => $product->id]) }}" method="post" style="display: inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection