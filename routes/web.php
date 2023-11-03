<?php

use Illuminate\Support\Facades\Route;
use App\Http\Models\User;
use App\Http\Models\Category;
use App\Http\Models\Client;
use App\Http\Models\Employee;
use App\Http\Models\Order;
use App\Http\Models\Product;
use App\Http\Models\Role;

Route::get('/main','App\Http\Controllers\MainController@getAll')->name('main.index');

Route::get('/users','App\Http\Controllers\UserController@getAll')->name('user.index');
Route::get('/users/create','App\Http\Controllers\UserController@create')->name('user.create');
Route::post('/users','App\Http\Controllers\UserController@store')->name('user.store');
Route::get('/users/{user}','App\Http\Controllers\UserController@show')->name('user.show');

Route::get('/categories','App\Http\Controllers\CategoryController@getAll')->name('category.index');
Route::get('/categories/create','App\Http\Controllers\CategoryController@create')->name('category.create');

Route::get('/clients','App\Http\Controllers\ClientController@getAll')->name('client.index');
Route::get('/clients/create','App\Http\Controllers\ClientController@create')->name('client.create');

Route::get('/employees','App\Http\Controllers\EmployeeController@getAll')->name('employee.index');
Route::get('/employees/create','App\Http\Controllers\EmployeeController@create')->name('employee.create');

Route::get('/orders','App\Http\Controllers\OrderController@getAll')->name('order.index');
Route::get('/orders/create','App\Http\Controllers\Ordersontroller@create')->name('order.create');

Route::get('/products','App\Http\Controllers\ProductController@getAll')->name('product.index');
Route::get('/products/create','App\Http\Controllers\ProductController@create')->name('product.create');

Route::get('/bin','App\Http\Controllers\BinController@getAll')->name('bin.index');
Route::get('/bin/create','App\Http\Controllers\BinController@create')->name('bin.create');

Route::get('/registration','App\Http\Controllers\AuthController@registration')->name('auth.registration');
Route::get('/authorization','App\Http\Controllers\AuthController@authorization')->name('auth.authorization');
Route::get('/lk','App\Http\Controllers\AuthController@lk')->name('auth.lk');