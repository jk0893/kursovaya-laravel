<?php

use Illuminate\Support\Facades\Route;

// --------------------------Main-Page--------------------

Route::get('/', [App\Http\Controllers\MainController::class, 'getAll'])->name('main.index');

Route::group(['namespace' => 'Admin', 'prefix' => 'admin', 'middleware' => 'admin'], function () {

    Route::group(['namespace' => 'User'], function () {
        Route::get('/users', [App\Http\Controllers\UserController::class, 'getAll'])->name('admin.user.index');
        Route::get('/users/create', [App\Http\Controllers\UserController::class, 'create'])->name('admin.user.create');
        Route::post('/users', [App\Http\Controllers\UserController::class, 'store'])->name('admin.user.store');
        Route::get('/users/{user}', [App\Http\Controllers\UserController::class, 'show'])->name('admin.user.show');
        Route::get('/users/{user}/edit', [App\Http\Controllers\UserController::class, 'edit'])->name('admin.user.edit');
        Route::patch('/users/{user}', [App\Http\Controllers\UserController::class, 'update'])->name('admin.user.update');
        Route::delete('/users/{user}', [App\Http\Controllers\UserController::class, 'delete'])->name('admin.user.delete');
    });

    Route::group(['namespace' => 'Client'], function () {
        Route::get('/clients', [App\Http\Controllers\ClientController::class, 'getAll'])->name('admin.client.index');
        Route::get('/clients/create', [App\Http\Controllers\ClientController::class, 'create'])->name('admin.client.create');
        Route::post('/clients', [App\Http\Controllers\ClientController::class, 'store'])->name('admin.client.store');
        Route::get('/clients/{client}', [App\Http\Controllers\ClientController::class, 'show'])->name('admin.client.show');
        Route::get('/clients/{client}/edit', [App\Http\Controllers\ClientController::class, 'edit'])->name('admin.client.edit');
        Route::patch('/clients/{client}', [App\Http\Controllers\ClientController::class, 'update'])->name('admin.client.update');
        Route::delete('/clients/{client}', [App\Http\Controllers\ClientController::class, 'delete'])->name('admin.client.delete');
    });

    Route::group(['namespace' => 'Employee'], function () {
        Route::get('/employees', [App\Http\Controllers\EmployeeController::class, 'getAll'])->name('admin.employee.index');
        Route::get('/employees/create', [App\Http\Controllers\EmployeeController::class, 'create'])->name('admin.employee.create');
        Route::post('/employees', [App\Http\Controllers\EmployeeController::class, 'store'])->name('admin.employee.store');
        Route::get('/employees/{employee}', [App\Http\Controllers\EmployeeController::class, 'show'])->name('admin.employee.show');
        Route::get('/employees/{employee}/edit', [App\Http\Controllers\EmployeeController::class, 'edit'])->name('admin.employee.edit');
        Route::patch('/employees/{employee}', [App\Http\Controllers\EmployeeController::class, 'update'])->name('admin.employee.update');
        Route::delete('/employees/{employee}', [App\Http\Controllers\EmployeeController::class, 'delete'])->name('admin.employee.delete');
    });

    Route::group(['namespace' => 'Product'], function () {
        Route::get('/products', [App\Http\Controllers\ProductController::class, 'getAll'])->name('admin.product.index');
        Route::get('/products/create', [App\Http\Controllers\ProductController::class, 'create'])->name('admin.product.create');
        Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('admin.product.store');
        Route::get('/products/{product}', [App\Http\Controllers\ProductController::class, 'show'])->name('admin.product.show');
        Route::get('/products/{product}/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('admin.product.edit');
        Route::patch('/products/{product}', [App\Http\Controllers\ProductController::class, 'update'])->name('admin.product.update');
        Route::delete('/products/{product}', [App\Http\Controllers\ProductController::class, 'delete'])->name('admin.product.delete');
    });

});

Route::group(['middleware' => 'employee'], function () {
    Route::group(['namespace' => 'Order'], function () {
        Route::get('/orders', [App\Http\Controllers\OrderController::class, 'getAll'])->name('order.index');
        Route::get('/orders/create', [App\Http\Controllers\OrderController::class, 'create'])->name('order.create');
        Route::post('/orders', [App\Http\Controllers\OrderController::class, 'store'])->name('order.store');
        Route::get('/orders/{order}', [App\Http\Controllers\OrderController::class, 'show'])->name('order.show');
        Route::get('/orders/{order}/edit', [App\Http\Controllers\OrderController::class, 'edit'])->name('order.edit');
        Route::patch('/orders/{order}', [App\Http\Controllers\OrderController::class, 'update'])->name('order.update');
        Route::delete('/orders/{order}', [App\Http\Controllers\OrderController::class, 'delete'])->name('order.delete');
    });

});

Route::get('/catalogue', [App\Http\Controllers\CatalogueController::class, 'getAll'])->name('catalogue.index');
Route::get('/catalogue/{product}', [App\Http\Controllers\CatalogueController::class, 'show'])->name('catalogue.show');

// --------------------------Bin--------------------

Route::get('/bin', [App\Http\Controllers\BinController::class, 'getAll'])->name('bin.index');
Route::post('/bin', [App\Http\Controllers\BinController::class, 'store'])->name('bin.store');
Route::patch('/bin/{product}', [App\Http\Controllers\BinController::class, 'update'])->name('bin.update');
Route::delete('/bin/{product}', [App\Http\Controllers\BinController::class, 'delete'])->name('bin.delete');

// --------------------------Auth--------------------
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
