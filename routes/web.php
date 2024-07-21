<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthPagesController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TwoFactorController;

// Routes inside this group require authentication
Route::middleware(['auth'])->group(function () {
    // redirected routes
    // Route::redirect('/home', '/')->name('dashboard');
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/auth/two-factor', TwoFactorController::class)->name('two-factor');
    Route::get('/profile-information',ProfileController::class)->name('profile');
});
// Routes outside the 'auth' middleware group
Route::middleware(['guest'])->group(function () {
    Route::get('/login', [AuthPagesController::class, 'login'])->name('login');

});
