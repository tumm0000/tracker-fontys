<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

Route::get('/resources', function () {
    return view('resources');
})->name('resources');

Route::get('/bookings', function () {
    return view('bookings');
})->name('bookings');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');