<?php

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

Route::get('posts', function () {
    return view('posts');
});

Route::get('post', function () {
    return view('post');
});
