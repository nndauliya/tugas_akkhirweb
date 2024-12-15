<?php


use App\Http\Controllers\CartController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/promo', function () {
    return view('promo');
});

Route::get('/contact', function () {
    return view('contact');
});


Route::get('/new', function () {
    return view('new');
});

Route::resource('product', ProductController::class); // CRUD produk
Route::get('/newproduct', [ProductController::class, 'newProducts'])->name('product.new');



// Route::get('cart', [CartController::class, 'index'])->name('cart.index'); // Menampilkan keranjang
// Route::post('cart/{product_id}/add', [CartController::class, 'addToCart'])->name('cart.add'); // Menambah ke keranjang
// Route::post('/cart', [CartController::class, 'addToCart']);