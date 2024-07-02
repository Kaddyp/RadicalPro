<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/courses', function () {
    return view('courses');
});

Route::get('/contactUs', function () {
    return view('contactUs');
});