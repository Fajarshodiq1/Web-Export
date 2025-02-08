<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductClickController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/template', [PageController::class, 'template'])->name('template');
Route::get('/products', [PageController::class, 'products'])->name('products');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Rute Untuk Melihat Kategori
Route::get('/browse/{category:slug}', [PageController::class, 'category'])->name('front.category');

// Rute melihat Detail Product
Route::get('/details/{product:slug}', [PageController::class, 'details'])->name('front.details');

Route::post('/track-click', [ProductClickController::class, 'trackClick'])->name('track.click');