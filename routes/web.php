<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InicioController;
use App\Http\Controllers\SuppliersController;
use App\Http\Controllers\InvoicesController;
use App\Http\Controllers\OrdersController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ConfirmablePasswordController;
use App\Http\Controllers\Auth\EmailVerificationNotificationController;
use App\Http\Controllers\Auth\EmailVerificationPromptController;
use App\Http\Controllers\Auth\NewPasswordController;
use App\Http\Controllers\Auth\PasswordController;
use App\Http\Controllers\Auth\PasswordResetLinkController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;

Route::middleware(['auth'])->group(function () {
    Route::get('/', [AuthenticatedSessionController::class, 'create']);
    Route::get('inicio', [InicioController::class, 'index'])->name('inicio');
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
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');
    Route::get('profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('profile/destroy', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('products', ProductsController::class);
    Route::resource('users', UsersController::class);
    Route::resource('orders', OrdersController::class);
});


Route::group(['middleware' => ['role:admin']], function () {
});

// Rutas de autenticación
Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::post('login', [AuthenticatedSessionController::class, 'store']);
Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

Route::get('password/confirm', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
Route::post('password/confirm', [ConfirmablePasswordController::class, 'store']);

Route::post('email/verification-notification', [EmailVerificationNotificationController::class, 'store'])
    ->middleware('auth')
    ->name('verification.send');

Route::get('email/verify', [EmailVerificationPromptController::class, '__invoke'])
    ->middleware('auth')
    ->name('verification.notice');

Route::get('reset-password', [PasswordResetLinkController::class, 'create'])->name('password.request');
Route::post('reset-password', [PasswordResetLinkController::class, 'store'])->name('password.email');

Route::get('reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
Route::post('reset-password', [NewPasswordController::class, 'store'])->name('password.update');

Route::get('register', [RegisteredUserController::class, 'create'])->name('register');
Route::post('register', [RegisteredUserController::class, 'store']);
