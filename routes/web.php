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

Route::get('/', [\App\Http\Controllers\UserController::class,'showcorrecthomepage']);
Route::get('/about', [\App\Http\Controllers\PageController::class,'aboutpage']);
Route::post('/register',[\App\Http\Controllers\UserController::class ,'register']);
Route::post('/login',[\App\Http\Controllers\UserController::class,'login']);
Route::post('/logout',[\App\Http\Controllers\UserController::class,'logout']);
