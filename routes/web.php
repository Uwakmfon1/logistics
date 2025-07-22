<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\AuthController;


Route::get('/', function () {   return view('welcome');})->name('home');


Route::get('/user/register',[AuthController::class,'registerView']);
Route::post('/user/register',[AuthController::class,'registerUser'])->name('register');

Route::get('/user/login',[AuthController::class,'loginView']);
Route::post('/user/login',[AuthController::class,'loginUser'])->name('login');