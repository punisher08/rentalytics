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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



Route::prefix('admin')->middleware(['auth'])->group(function () {
    // GET 
    Route::get('/home', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin-dasboard');
    Route::get('/accounts', [App\Http\Controllers\AdminController::class, 'accounts'])->name('admin-accounts');
    Route::get('/account-details', [App\Http\Controllers\AdminController::class, 'accountDetails'])->name('admin-details');
    Route::get('/settings', [App\Http\Controllers\AdminController::class, 'settings'])->name('admin-settings');
    Route::get('/credentials', [App\Http\Controllers\AdminController::class, 'credentials'])->name('admin-credentials');
    Route::get('/terms-and-policies', [App\Http\Controllers\AdminController::class, 'termsAndPolicies'])->name('admin-terms-and-policies');

    // POST 
});


Route::prefix('renter')->middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\RenterController::class, 'dashboard'])->name('renter-dasboard');
    Route::get('/house-details', [App\Http\Controllers\RenterController::class, 'houseDetails'])->name('renter-house-details');
    Route::get('/search', [App\Http\Controllers\RenterController::class, 'search'])->name('renter-search');
    Route::get('/profile', [App\Http\Controllers\RenterController::class, 'profile'])->name('renter-profile');
});

