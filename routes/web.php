<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\AboutController;

Route::get('/', [PageController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');