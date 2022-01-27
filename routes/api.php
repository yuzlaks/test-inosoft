<?php

use App\Http\Controllers\Api\KendaraanController;
use App\Http\Controllers\JWTController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'auth'],function (){

    Route::get('/profile', [JWTController::class, 'profile']);
    Route::post('/register', [JWTController::class, 'register'])->name('api.register');
    Route::post('/login', [JWTController::class, 'login'])->name('api.login');
    Route::post('/logout', [JWTController::class, 'logout'])->name('api.logout');
    
});

Route::group(['prefix' => 'kendaraan'],function (){

    Route::get('/', [KendaraanController::class, 'index']);
    Route::post('/store', [KendaraanController::class, 'store'])->name('api.store');
    Route::post('/delete', [KendaraanController::class, 'destroy'])->name('api.destroy');
    Route::post('/update/{id}', [KendaraanController::class, 'update'])->name('api.update');

});
