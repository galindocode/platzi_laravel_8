<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::view('/', 'index')->name('home');

Route::get("/course/{course:slug}", [PageController::class, 'course'])->name('course');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
