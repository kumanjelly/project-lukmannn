<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/about', function () {
    return view('products.about');
})->name('products.about');

Route::get('/contact', function () {
    return view('products.contact');
})->name('products.contact');

// Halaman Utama / Landing Page
Route::get('/', [ProductController::class, 'index'])->name('products.index');

// Halaman Khusus Katalog Produk Baju
Route::get('/katalog', [ProductController::class, 'catalog'])->name('products.catalog');

// Halaman Detail Produk
Route::get('/product/{id}', [ProductController::class, 'show'])->name('products.show');