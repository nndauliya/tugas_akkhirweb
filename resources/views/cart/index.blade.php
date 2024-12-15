<!-- resources/views/cart/index.blade.php -->
@extends('layouts.template')

@section('container')
<div class="container">
    <h1>Keranjang Belanja</h1>
    <table class="table mt-3">
        <thead>
            <tr>
                <th>#</th>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($carts as $cart)
                <tr>
                    <td>{{ $cart->id }}</td>
                    <td>{{ $cart->product->title }}</td>
                    <td>{{ $cart->product->price }}</td>
                    <td>{{ $cart->quantity }}</td>
                    <td>{{ $cart->product->price * $cart->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
