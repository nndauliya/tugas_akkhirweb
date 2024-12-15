@extends('layouts.template')

@section('container')

<div class="d-flex justify-content-between align-items-center mb-4 mt-5 pt-5">
    <h4>Tambahkan product baru anda</h4>
    <a href="{{ route('product.create') }}" class="btn btn-primary">Add Product</a>
</div>

@if (session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Name</th>
                <th>Description</th>
                <th>Price</th>
                <th>Image</th> 
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($products as $item)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->description }}</td>
                <td>${{ number_format($item->price, 2) }}</td>
                <td>
                    @if ($item->image)
                        <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}" style="width: 50px; height: auto;">
                    @else
                        <span>No Image</span>
                    @endif
                </td>
                <td>
                    <a href="{{ route('product.edit', $item) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('product.destroy', $item) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger btn-sm" onclick="return confirm('Are you sure?')">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">No products found.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>

<script>
    setTimeout(() => {
        const alert = document.querySelector('.alert');
        if (alert) alert.remove();
    }, 3000);
</script>

@endsection
