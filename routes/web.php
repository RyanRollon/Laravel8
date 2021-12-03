<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Auth\LogoutController;                    //Logout
use  App\Http\Controllers\Auth\LoginController;                   //Login Controller
use  App\Http\Controllers\Auth\RegisterController;         //Register Controller
use  App\Http\Controllers\DashboardController;              //Dashboard Controller

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/posts', function () {
    return view('posts.index');
})->name('posts.index');
