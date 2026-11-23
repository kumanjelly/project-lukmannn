<?php

<<<<<<< HEAD
use App\Http\Controllers\AdminProjectController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\ProjectController;
use Illuminate\Support\Facades\Route;

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/actionlogin', [LoginController::class, 'login'])
    ->middleware('throttle:6,1')
    ->name('login.action');
Route::post('/logout', [LoginController::class, 'logout'])
    ->middleware('auth')
    ->name('logout');

Route::get('/', function () {
    return view('page.home');
});

Route::get('/profile', [MahasiswaController::class, 'index']);

Route::get('/project', [ProjectController::class, 'index'])->name('project.index');
Route::get('/project/{id}', [ProjectController::class, 'show'])->name('project.show');

Route::get('/about', function () {
    return view('page.about');
});

Route::prefix('admin')->name('admin.')->middleware('auth')->group(function () {
    Route::get('/', function () {
        return view('admin.home');
    })->name('home');

    Route::get('/project/pdf', [AdminProjectController::class, 'exportPdf'])->name('project.pdf');
    Route::resource('project', AdminProjectController::class)->except('show');
});
=======
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
>>>>>>> 2d26f3e51a9e2dfaf5dcfd90529fde1f0f3febf1
