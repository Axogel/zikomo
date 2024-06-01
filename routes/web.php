<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StaffController;


Route::get('/', [InicioController::class, 'index']);
Route::get('products', [ProductsController::class, 'index']);
Route::get('products/create', [ProductsController::class, 'create']);
Route::get('suppliers', [SuppliersController::class, 'index']);
Route::get('suppliers/create', [SuppliersController::class, 'create']);
Route::get('orders', [OrdersController::class, 'index']);
Route::get('orders/create', [OrdersController::class, 'create']);
Route::get('invoices', [InvoicesController::class, 'index']);
Route::get('invoices/create', [InvoicesController::class, 'create']);
Route::get('users', [UsersController::class, 'index']);
Route::get('users/create', [UsersController::class, 'create']);
Route::get('staff', [StaffController::class, 'index']);
Route::get('staff/create', [StaffController::class, 'create']);
Route::get('staff/payment', [StaffController::class, 'payment']);
