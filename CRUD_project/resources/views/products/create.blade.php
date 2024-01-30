@extends('layouts.base')
@section('title')
    Add New Product
@endsection
@section('content')
    
<h1>Add Product</h1>
<form action="{{url('products')}}" method="post" class="container w-75">
    @csrf
    <div class="mb-3">
        <label for="product_name" class="form-label">Product Name</label>
        <input
        type="text"
        class="form-control"
        name="product_name"
        id="product_name"
        placeholder="Product Name"
        />
    </div>
    
    <div class="mb-3">
        <label for="product_desc" class="form-label">Product Desc</label>
        <textarea class="form-control" name="product_desc" id="product_desc" rows="3"></textarea>
    </div>
    
    <div class="mb-3">
        <label for="price" class="form-label">Price</label>
        <input
        type="number"
        class="form-control"
        name="price"
        id="price"
        placeholder="Price"
        />
    </div>
    <input type="submit" value="submit" class="btn btn-primary"> 
</form>
        
@endsection