<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/users', 'App\Http\Controllers\UsersController@getAll');
Route::get('/users', 'App\Http\Controllers\UsersController@createUser');
Route::get('/users', 'App\Http\Controllers\UsersController@updateUser');
Route::get('/users', 'App\Http\Controllers\UsersController@deleteUser');