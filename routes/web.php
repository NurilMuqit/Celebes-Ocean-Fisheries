<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/news',[NewsController::class, 'index'])->name('news');
Route::get('/news/all', [NewsController::class, 'index2'])->name('news.all');