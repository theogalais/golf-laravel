<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CalibrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::delete('/users/{user}/', [UserController::class, 'destroy'])->name('users.destroy');

Route::prefix('/users/{user}')->group(function () {
    Route::get('/calibrations', [CalibrationController::class, 'index'])->name('calibrations.index');
    Route::get('/calibrations/create', [CalibrationController::class, 'create'])->name('calibrations.create');
    Route::post('/calibrations', [CalibrationController::class, 'store'])->name('calibrations.store');
    Route::get('/calibrations/{calibration}/edit', [CalibrationController::class, 'edit'])->name('calibrations.edit');
    Route::put('/calibrations/{calibration}', [CalibrationController::class, 'update'])->name('calibrations.update');
    Route::delete('/calibrations/{calibration}', [CalibrationController::class, 'destroy'])->name('calibrations.destroy');
});


require __DIR__.'/auth.php';
