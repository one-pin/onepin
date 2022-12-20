<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

# Socials #
Route::get('/auth/login/google', [\App\Http\Controllers\RedirectionController::class, 'handleGoogleRedirection'])->name('auth.google');
Route::get('/redirect/google/callback', [\App\Http\Controllers\RedirectionController::class, 'handleGoogleLoginCallback']);


