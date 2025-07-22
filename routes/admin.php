<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;

Route::get('/', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix('admin')->group(function(){
    
    Route::get('login',[AuthController::class,'index']);
    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout',[AuthController::class,'logout']);

    // Route::
});

