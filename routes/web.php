<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RegisterController;

Route::get('/', function () {
    return view('home');
});

Route::middleware('auth')->group(function() {
   
});

Route::get('/posts', [PostController::class, 'index'])->name('posts.index');

Route::get('/register', [RegisterController::class, 'index'])->name('register');

Route::middleware('guest')->group(function() {
   
});
