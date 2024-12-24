<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/blogpost', function () {
    return view('blogpost');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/profile', function () {
    return view('profile');
});
