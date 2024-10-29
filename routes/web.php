<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuardController;
use Illuminate\Support\Facades\Route;

Route::get('/', [GuardController::class, 'index'])->name('guard.index');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/landing', [AdminController::class, 'index'])->name('landing.index');
    Route::put('/landing/{id}', [AdminController::class, 'update'])->name('landing.update');
});
