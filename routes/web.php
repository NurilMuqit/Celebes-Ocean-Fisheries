<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\DownloaderController;

Route::middleware('auth')->group(function () {
    // Product routes
    Route::get('/product/add', [ProductController::class, 'index2'])->name('product.add');
    Route::post('/product/add', [ProductController::class, 'add_product'])->name('product.add.post');
    Route::get('/product/edit/{product_slug}',[ProductController::class,'edit'])->name('product.edit');
    Route::put('/product/edit/{product_slug}',[ProductController::class,'update'])->name('product.edit.post');
    Route::delete('/product/delete/{product_slug}',[ProductController::class,'destroy'])->name('product.delete');

    // News routes
    Route::get('/news/add', [NewsController::class, 'index4'])->name('news.add');
    Route::post('/news/add', [NewsController::class, 'add_news'])->name('news.add.post');
    Route::get('/news/edit/{news_slug}', [NewsController::class, 'edit'])->name('news.edit');
    Route::put('/news/edit/{news_slug}', [NewsController::class, 'update'])->name('news.edit.post');
    Route::delete('/news/delete/{news_slug}', [NewsController::class, 'destroy'])->name('news.delete');

    Route::get('/user/contact', [PageController::class, 'index2'])->name('user.contact');
    Route::get('/user/contact/detail/{id}', [PageController::class, 'edit'])->name('user.contact.detail');
    Route::delete('/user/contact/delete/{id}', [PageController::class, 'destroy'])->name('user.contact.delete');

    Route::get('/about/downloader',[DownloaderController::class, 'index'])->name('downloader');
    Route::delete('/about/downloader/delete/{id}', [DownloaderController::class, 'destroy'])->name('downloader.delete');
});

Route::middleware('guest')->group(function () {
    Route::get('/login', [AuthController::class, 'index'])->name('login');
    Route::post('/login', [AuthController::class, 'login'])->name('login.post');
});

Route::get('/', [PageController::class, 'index'])->name('home');
Route::post('/', [PageController::class, 'store'])->name('form.add');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/product', [ProductController::class, 'index'])->name('product');
Route::get('/news',[NewsController::class, 'index'])->name('news');
Route::get('/news/all', [NewsController::class, 'index2'])->name('news.all');
Route::get('/news/{news_slug}', [NewsController::class, 'index3'])->name('news.show');
Route::get('/download/company-profile', [DownloaderController::class, 'companyProfile'])->name('download.company-profile');
