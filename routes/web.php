<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('index');

// Rute Untuk Melihat Kategori
Route::get('/browse/{category:slug}', [PageController::class, 'category'])->name('front.category');

// Rute melihat Detail Product
Route::get('/details/{product:slug}', [PageController::class, 'details'])->name('front.details');