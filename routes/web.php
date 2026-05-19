<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/',[HomeController::class,'index']);
Route::get('/product',[HomeController::class,'product'])->name('home.product');
Route::get('admin/about/main',[HomeController::class,'about'])->name('about');
Route::get('/contact',[HomeController::class,'contact'])->name('contact');

Route::get('/login',[AuthController::class,'login'])->name('login');

Route::get('/signup',[AuthController::class,'register'])->name('signup');
Route::get('/forgot',[AuthController::class,'forgot'])->name('forgot');
Route::post('/register',[AuthController::class,'signup'])->name('register');
Route::post('/signin',[AuthController::class,'signin'])->name('signin');

Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard')->middleware('admin');
Route::get('/user-dashboard',[UserController::class,'index'])->name('user-dashboard')->middleware('admin');

Route::get('/logout',[AuthController::class,'logout'])->name('logout');