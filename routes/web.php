<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AimagController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('terms/terms');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/add_more_info', [AimagController::class, 'index']);
});

require __DIR__.'/auth.php';
