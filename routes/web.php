<?php

use App\Http\Controllers\PostsController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('what-we-do', function () {
    return view('what-we-do');
});

Route::get('who-we-are', function () {
    return view('who-we-are');
});

Route::get('contact', function () {
    return view('contact');
});

Route::get('posts', [PostsController::class, 'index']);

Route::get('post/{id}', [PostsController::class, 'show']);
