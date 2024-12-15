<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // Menampilkan produk
    public function index()
    {
        $products = Product::all();
        return view('product.index', compact('products'));
    }

    // Menampilkan form untuk menambah produk
    public function create()
    {
        return view('product.create');
    }

    // Menampilkan produk terbaru
    public function newProduct()
    {
        $products = Product::orderBy('created_at', 'desc')->limit(5)->get();
        return view('new', compact('product'));
    }

    // Menyimpan produk baru
    public function store(Request $request)
    {
        $validated = $this->validateProduct($request);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $validated['image'] = $imagePath;
        }

        Product::create($validated);

        return redirect()->route('product.index')->with('success', 'Product created successfully.');
    }

    // Menampilkan form untuk mengedit produk
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    // Mengupdate produk
    public function update(Request $request, Product $product)
    {
        $validated = $this->validateProduct($request);

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products', 'public');
            $validated['image'] = $imagePath;

            // Hapus gambar lama jika ada
            if ($product->image) {
                Storage::disk('public')->delete($product->image);
            }
        }

        $product->update($validated);

        return redirect()->route('product.index')->with('success', 'Product updated successfully.');
    }

    // Menghapus produk
    public function destroy(Product $product)
    {
        if ($product->image) {
            Storage::disk('public')->delete($product->image);
        }

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }

    // Helper untuk validasi
    protected function validateProduct(Request $request)
    {
        return $request->validate([
            'name' => 'required|string|max:255',
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,svg|max:10240',
            'price' => 'required|numeric',
            'description' => 'nullable|string',
        ]);
    }

    public function showNewProducts()
    {
        $products = Product::latest()->take(5)->get(); // Misalnya hanya menampilkan 5 produk terbaru
        return view('newproduct', compact('products'));
    }

}

