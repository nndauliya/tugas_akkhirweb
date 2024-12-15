<?php


// app/Http/Controllers/CartController.php
// namespace App\Http\Controllers;

// use App\Models\Cart;
// use App\Models\Product;
// use Illuminate\Http\Request;

// class CartController extends Controller
// {
//     public function addToCart(Request $request)
//     {
//         // Validasi input
//         $request->validate([
//             'product_id' => 'required|exists:products,id',
//             'quantity' => 'required|integer|min:1',
//         ]);

//         $product = Product::findOrFail($request->product_id);

//         // Cek apakah produk sudah ada di keranjang
//         $cartItem = Cart::where('product_id', $product->id)->first();

//         if ($cartItem) {
//             // Jika produk sudah ada di keranjang, update jumlahnya
//             $cartItem->quantity += $request->quantity;
//             $cartItem->save();
//         } else {
//             // Jika produk belum ada, buat entri baru di keranjang
//             Cart::create([
//                 'product_id' => $product->id,
//                 'quantity' => $request->quantity,
//             ]);
//         }

//         return response()->json([
//             'message' => 'Produk berhasil ditambahkan ke keranjang!',
//         ]);
//     }
// }
