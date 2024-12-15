@extends('layouts.template')

@section('container')
<div class="container my-5">
    <h1 class="text-center">Edit Product</h1>

    <form action="{{ route('product.update', $product->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-4">
            <label for="name" class="form-label fw-semibold">Nama Prodcut</label>
            <input type="name" class="form-control border-gray-300" name="name" id="name" value="{{ $product->name }}" placeholder=" Product Name">
        </div>
        <div class="mb-4">
            <label for="description" class="form-label fw-semibold">Description Prodcut</label>
            <input type="description" class="form-control border-gray-300" name="descrition" id="description" value="{{ $product->desctiption }}" placeholder="Description product ">
        </div>
       
        <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="number" class="form-control" id="price" name="price" value="{{ $product->price }}" placeholder="Product Price " >
        </div>
        <button type="submit" class="btn btn-warning">Update Product</button>
        <a href="{{ url('product.index') }}" class="btn btn-secondary">Back</a>
    </form>
</div>
@endsection
