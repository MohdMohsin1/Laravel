@extends('layouts.base')
@section('title')
    Edit
@endsection
@section('content')
    <h1>Edit Product</h1>
<form action="{{route('products.update',['product'=> $product->id])}}" method="post" class="container w-75">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="product_name" class="form-label">Product Name</label>
        <input
        type="text"
        class="form-control"
        name="product_name"
        id="product_name"
        placeholder="Product Name"
        value="{{$product->product_name}}"
        />
    </div>
    
    <div class="mb-3">
        <label for="product_desc" class="form-label">Product Desc</label>
        <textarea class="form-control" name="product_desc" id="product_desc" rows="3">{{$product->product_desc}} </textarea>
    </div>
    
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input
        type="number"
        class="form-control"
        name="price"
        value="{{$product->price}}"
        id="price"
        placeholder="Price"
        />
    </div>
    <input type="submit" value="submit" class="btn btn-primary"> 
</form>
        
@endsection