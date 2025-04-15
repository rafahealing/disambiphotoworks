<?php

use Illuminate\Support\Facades\Route;

// Homepage halaman utama
Route::get('/', function () {
    return view('home');
})->name('home');

// Login
Route::get('/login', function () {
    return view('login');
})->name('login');

// sign up
Route::get('/signup', function () {
    return view('signup');
})->name('signup');
