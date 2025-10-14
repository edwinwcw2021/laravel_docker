<?php

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\MainController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/test', function (Request $request) {
    return 'this is a test';
});

Route::get('test2', [TestController::class, 'index']);

Route::get('test3', [MainController::class, 'getallRecord']);

Route::post('addnew', [MainController::class, 'addrecord']);

Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
Route::post('refresh', [AuthController::class, 'refresh']);
Route::middleware('auth:api')->get('user', [AuthController::class, 'me']);
