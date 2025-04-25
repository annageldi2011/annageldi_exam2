<?php

use Illuminate\Support\Facades\Route;


Route::get('/home', function () {
    return view('home');
});

Route::get('/yolagcylar', function () {
    return view('layout');
});

Route::get('/bronlamak', function () {
    return view('about');
});

Route::get('/habarlasmak', function () {
    return view('index');
});

