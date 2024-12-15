@extends('layouts.template')

@section('container')
<h1>Keranjang Belanja</h1>

@if (session('cart'))
    <table class="table">
        <thead>
            <tr>
                <th>Nama Produk</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach(session('cart') as $item)
                <tr>
                    <td>{{ $item['name'] }}</td>
                    <td>Rp{{ number_format($item['price'], 0, ',', '.') }}</td>
                    <td>{{ $item['quantity'] }}</td>
                    <td>Rp{{ number_format($item['price'] * $item['quantity'], 0, ',', '.') }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>Keranjang Anda kosong.</p>
@endif
@endsection
