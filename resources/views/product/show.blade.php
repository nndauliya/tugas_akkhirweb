@extends('layouts.template')

@section('container')
<div class="container my-5">
    <h1 class="text-center">Product Details</h1>
    <div class="card mt-4">
        <div class="card-body">
            <h3 class="card-title">{{ $product->title }}</h3>
            <p class="card-text"><strong>Description:</strong> {{ $product->description }}</p>
            <p class="card-text"><strong>Price:</strong> Rp{{ number_format($product->price, 0, ',', '.') }}</p>
            <p class="card-text"><strong>Discount Price:</strong> Rp{{ number_format($product->discount_price, 0, ',', '.') }}</p>
            <a href="{{ route('product.index') }}" class="btn btn-secondary">Back</a>
        </div>
    </div>
</div>
@endsection
