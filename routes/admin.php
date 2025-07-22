<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\IsAdmin;
use App\Http\Controllers\Admin\AuthController;

Route::get('/', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Route::middleware('isAdmin')->prefix('admin')->group(function(){
    
//     Route::get('login',[AuthController::class,'index']);
//     Route::post('login', [AuthController::class, 'login']);
//     Route::post('logout',[AuthController::class,'logout']);

//     // Route::
// });

Route::prefix('admin')->group(function(){
    
    Route::get('login',[AuthController::class,'index'])->name('get-login');

    Route::post('login', [AuthController::class, 'login'])->name('login');
    Route::post('logout',[AuthController::class,'logout'])->name('logout');

    
    Route::get('forgot-password',[AuthController::class,'forgotPassword'])->name('password.forgot');
    Route::post('reset-password',[AuthController::class,'passwordReset'])->name('password.reset');

});

