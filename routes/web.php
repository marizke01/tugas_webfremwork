<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');   
});

Route::get('/about', function () {
    return view('about'); 
});

Route::get('/program', function () {
    return view('program'); 
});

Route::get('/our-team', function () {
    return view('ourteam'); 
});

Route::get('/contact-us', function () {
    return view('contactus'); 
});


Route::get('/program/{name}', function ($name) {
    return "Detail Program: " . ucfirst($name);
});

Route::get('/program/{name?}', function ($name = 'default') {
    return "Program yang dipilih: " . ucfirst($name);
});


Route::redirect('/contact', '/contact-us'); 



Route::fallback(function () {
    return view('welcome');
});


