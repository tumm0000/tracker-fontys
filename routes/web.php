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

// TODO: Vervang met echte controller method wanneer backend klaar is
// Route::get('/resources/{id}', [ResourceController::class, 'show'])->name('resource.show');
Route::get('/resources/{id}', function ($id) {
    // TODO: Haal resource op via API: $resource = Http::get("/api/resources/{$id}")->json();
    // Of via Eloquent: $resource = Resource::findOrFail($id);
    return view('resource-show', ['resource' => null, 'id' => $id]);
})->name('resource.show');

Route::get('/bookings', function () {
    return view('bookings');
})->name('bookings');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');