<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('what-we-do', function () {
    return view('what-we-do');
});

Route::get('who-we-are', function () {
    return view('who-we-are');
});

Route::get('blog', function () {
    return view('blog');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('blog', [PostController::class, 'index']);
