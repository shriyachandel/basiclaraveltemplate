<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/feature', function () {
    return view('feature');
});

Route::get('/team', function () {
    return view('team');
});

Route::get('/menu', function () {
    return view('menu');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/single', function () {
    return view('single');
});
Route::get('/blog', function () {
    return view('blog');
});
Route::get('/contact', function () {
    return view('contact');
});

