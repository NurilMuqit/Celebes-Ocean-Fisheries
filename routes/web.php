<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DownloaderController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/news',[NewsController::class, 'index'])->name('news');
Route::get('/news/all', [NewsController::class, 'index2'])->name('news.all');
Route::get('/news/{id}', [NewsController::class, 'index3'])->name('news.show');

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::get('/product/add', [ProductController::class, 'index2'])->name('product.add');
Route::post('/product/add', [ProductController::class, 'add_product'])->name('product.add.post');
Route::get('/product/edit/{id}',[ProductController::class,'edit'])->name('product.edit');
Route::put('/product/edit/{id}',[ProductController::class,'update'])->name('product.edit.post');
Route::delete('/product/delete/{id}',[ProductController::class,'destroy'])->name('product.delete');

Route::get('/news/add', [NewsController::class, 'index4'])->name('news.add');
Route::post('/news/add', [NewsController::class, 'add_news'])->name('news.add.post');
Route::get('/news/edit/{id}', [NewsController::class, 'edit'])->name('news.edit');
Route::put('/news/edit/{id}', [NewsController::class, 'update'])->name('news.edit.post');
Route::delete('/news/delete/{id}', [NewsController::class, 'destroy'])->name('news.delete');

Route::get('/about/downloader',[DownloaderController::class, 'index'])->name('downloader');
Route::get('/download/company-profile', [DownloaderController::class, 'companyProfile'])->name('download.company-profile');