<?php

use Illuminate\Support\Facades\Route;

use Freakage\Auth\Controllers\LoginController;
use Freakage\Auth\Controllers\RegisterController;

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

Route::get('login',[LoginController::class,'index'])->name('login');
Route::post('user_login',[LoginController::class,'validateLoginCredentials'])->name('user_login');

Route::get('register',[RegisterController::class,'index'])->name('register');
Route::post('user_register',[RegisterController::class,'create'])->name('user_register');
