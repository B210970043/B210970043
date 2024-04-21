<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AimagController;
use App\Http\Controllers\Anket;

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [AimagController::class, 'index']);

Route::post('store_data', [App\Http\Controllers\AnketController::class, 'store_data']);
Route::post('user_login', [App\Http\Controllers\LoginController::class, 'user_login']);
Route::get('/fetch/{aimag_id}', [App\Http\Controllers\SumController::class, 'fetchSums']);
Route::get('/user-login', function () {
    return view('user_login');
})->name('user_login');

