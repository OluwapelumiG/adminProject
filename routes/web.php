<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('users/export', [UserController::class, 'exportPdf'])->name('users.export');

Route::resource('users', UserController::class)
    ->middleware(['auth']);


Route::post('users/search', [UserController::class, 'search'])->name('users.search');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__ . '/auth.php';
