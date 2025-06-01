<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\TravelPackageController;
use App\Http\Controllers\Admin\GalleryController;
use App\Http\Controllers\Admin\TransactionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\DetailController;
use App\Http\Controllers\CheckoutController;
use App\Http\Middleware\IsAdmin;
use Illuminate\Support\Facades\Auth;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/detail', [DetailController::class, 'index'])->name('detail');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('checkout');
Route::get('/checkout/success', [CheckoutController::class, 'success'])->name('checkout-success');

Route::prefix('admin')
    ->middleware(['auth',IsAdmin::class])
    ->group(function () {
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        Route::resource('travel-package', TravelPackageController::class);

        Route::resource('gallery', GalleryController::class);

        Route::resource('transaction', TransactionController::class);
    });

Auth::routes(['verify' => true]);

