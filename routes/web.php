<?php

use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/shop', [ProductController::class, 'index'])->name('products.index');
Route::get('/shop/{product}', [ProductController::class, 'show'])->name('products.show');

Route::get('/cart', [CartController::class, 'index'])->name('cart.index');
Route::get('/emptycart', [CartController::class, 'empty'])->name('cart.empty');
Route::post('/cart', [CartController::class, 'store'])->name('cart.store');
Route::patch('/cart/update/{rowId}', [CartController::class, 'update']);

Route::get('/blog', function () {
    return inertia('Blog');
});
Route::get('/contact', function () {
    return inertia('Contact');
});
