<?php

use Illuminate\Support\Facades\Route;
Route::get('/', function () {
    return view('home');
});

Route::get('/items', function () {
    return view('item');
});

Route::get('/pics', function () {
    return view('picture');
});


