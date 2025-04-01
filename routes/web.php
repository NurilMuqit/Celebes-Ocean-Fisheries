<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/news',[NewsController::class, 'index'])->name('news');
Route::get('/news/all', [NewsController::class, 'index2'])->name('news.all');
Route::get('/news/test', [NewsController::class, 'index3'])->name('news.show');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/product/add', [ProductController::class, 'index2'])->name('product.add');
Route::get('/product/edit',[ProductController::class,'index3'])->name('product.edit');

Route::get('/news/add', [NewsController::class, 'index4'])->name('news.add');
Route::get('/news/edit', [NewsController::class, 'index5'])->name('news.edit');

Route::post('/product/add', [ProductController::class, 'add_product'])->name('product.add.post');