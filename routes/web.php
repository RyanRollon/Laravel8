<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Auth\LogoutController;                    //Logout
use  App\Http\Controllers\Auth\LoginController;                   //Login Controller
use  App\Http\Controllers\Auth\RegisterController;         //Register Controller
use  App\Http\Controllers\DashboardController;              //Dashboard Controller
use  App\Http\Controllers\PostLikeController; 

use  App\Http\Controllers\PostController; 



Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
->name('dashboard')
->middleware('auth');
// ->middleware('auth') in order to not direct to the dashboard if the user is not login

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/register', [RegisterController::class, 'index'])
->name('register')
->middleware('guest');
// ->middleware('guest') in order to not direct to the register form if the user is still login
Route::post('/register', [RegisterController::class, 'store']);


Route::get('/login', [LoginController::class, 'index'])
->name('login')
->middleware('guest');  
// ->middleware('guest') in order to not direct to the login form if the user is still login

Route::post('/login', [LoginController::class, 'store']);


Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])
->name('posts.likes');




Route::get('/posts', [PostController::class, 'index'])
->name('posts.index');
Route::post('/posts', [PostController::class, 'store']);
