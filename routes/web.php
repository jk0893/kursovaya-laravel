<?php

use Illuminate\Support\Facades\Route;

// --------------------------Main-Page--------------------

Route::get('/','App\Http\Controllers\MainController@getAll')->name('main.index');

// --------------------------Users--------------------

Route::get('/users','App\Http\Controllers\UserController@getAll')->name('user.index');
Route::get('/users/create','App\Http\Controllers\UserController@create')->name('user.create');
Route::post('/users','App\Http\Controllers\UserController@store')->name('user.store');
Route::get('/users/{user}','App\Http\Controllers\UserController@show')->name('user.show');
Route::get('/users/{user}/edit','App\Http\Controllers\UserController@edit')->name('user.edit');
Route::patch('/users/{user}','App\Http\Controllers\UserController@update')->name('user.update');
Route::delete('/users/{user}','App\Http\Controllers\UserController@destroy')->name('user.delete');

// --------------------------Clients--------------------

Route::get('/clients','App\Http\Controllers\ClientController@getAll')->name('client.index');
Route::get('/clients/create','App\Http\Controllers\ClientController@create')->name('client.create');
Route::post('/clients','App\Http\Controllers\ClientController@store')->name('client.store');
Route::get('/clients/{client}','App\Http\Controllers\ClientController@show')->name('client.show');
Route::get('/clients/{client}/edit','App\Http\Controllers\ClientController@edit')->name('client.edit');
Route::patch('/clients/{client}','App\Http\Controllers\ClientController@update')->name('client.update');
Route::delete('/clients/{client}','App\Http\Controllers\ClientController@destroy')->name('client.delete');

// --------------------------Employees--------------------

Route::get('/employees','App\Http\Controllers\EmployeeController@getAll')->name('employee.index');
Route::get('/employees/create','App\Http\Controllers\EmployeeController@create')->name('employee.create');
Route::post('/employees','App\Http\Controllers\EmployeeController@store')->name('employee.store');
Route::get('/employees/{employee}','App\Http\Controllers\EmployeeController@show')->name('employee.show');
Route::get('/employees/{employee}/edit','App\Http\Controllers\EmployeeController@edit')->name('employee.edit');
Route::patch('/employees/{employee}','App\Http\Controllers\EmployeeController@update')->name('employee.update');
Route::delete('/employees/{employee}','App\Http\Controllers\EmployeeController@destroy')->name('employee.delete');

// --------------------------Orders--------------------

Route::get('/orders','App\Http\Controllers\OrderController@getAll')->name('order.index');
Route::get('/orders/create','App\Http\Controllers\Ordersontroller@create')->name('order.create');
Route::post('/orders','App\Http\Controllers\OrderController@store')->name('order.store');
Route::get('/orders/{order}','App\Http\Controllers\OrderController@show')->name('order.show');
Route::get('/orders/{order}/edit','App\Http\Controllers\OrderController@edit')->name('order.edit');
Route::patch('/orders/{order}','App\Http\Controllers\OrderController@update')->name('order.update');
Route::delete('/orders/{order}','App\Http\Controllers\OrderController@destroy')->name('order.delete');

// --------------------------Products--------------------

Route::get('/products','App\Http\Controllers\ProductController@getAll')->name('product.index');
Route::get('/products/create','App\Http\Controllers\ProductController@create')->name('product.create');
Route::post('/products','App\Http\Controllers\ProductController@store')->name('product.store');
Route::get('/products/{product}','App\Http\Controllers\ProductController@show')->name('product.show');
Route::get('/products/{product}/edit','App\Http\Controllers\ProductController@edit')->name('product.edit');
Route::patch('/products/{product}','App\Http\Controllers\ProductController@update')->name('product.update');
Route::delete('/products/{product}','App\Http\Controllers\ProductController@destroy')->name('product.delete');

// --------------------------Bin--------------------

Route::get('/bin','App\Http\Controllers\BinController@getAll')->name('bin.index');
Route::post('/bin','App\Http\Controllers\BinController@store')->name('bin.store');
Route::patch('/bin/{product}','App\Http\Controllers\BinController@update')->name('bin.update');
Route::delete('/bin/{product}','App\Http\Controllers\BinController@destroy')->name('bin.delete');

// --------------------------Auth--------------------
Route::get('/lk', 'App\Http\Controllers\AuthController@lk')->name('auth.lk');
Auth::routes();
