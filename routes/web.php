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



Route::prefix('admin')->middleware(['auth','verifyrole'])->group(function () {
    // GET 
    Route::get('/home', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin-dashboard');
    Route::get('/accounts', [App\Http\Controllers\AdminController::class, 'accounts'])->name('admin-accounts');
    Route::get('/account-details', [App\Http\Controllers\AdminController::class, 'accountDetails'])->name('admin-details');
    Route::get('/settings', [App\Http\Controllers\AdminController::class, 'settings'])->name('admin-settings');
    Route::get('/credentials', [App\Http\Controllers\AdminController::class, 'credentials'])->name('admin-credentials');
    Route::get('/terms-and-policies', [App\Http\Controllers\AdminController::class, 'termsAndPolicies'])->name('admin-terms-and-policies');
    Route::get('/{id}/details', [App\Http\Controllers\AdminController::class, 'userDetails']);
    Route::get('/data-analytics', [App\Http\Controllers\AdminController::class, 'dataAnalytics'])->name('admin-data-analytics');
    Route::get('/rental-places', [App\Http\Controllers\AdminController::class, 'rentalPlaces'])->name('admin-rental-places');
    Route::get('/{id}/rental-account-details', [App\Http\Controllers\AdminController::class, 'rentalAccountDetails'])->name('admin-rental-account-details');

    // POST 
});


Route::prefix('renter')->middleware(['auth'])->group(function () {
    Route::get('/home', [App\Http\Controllers\RenterController::class, 'dashboard'])->name('renter-dashboard');
    Route::get('/house-details', [App\Http\Controllers\RenterController::class, 'houseDetails'])->name('renter-house-details');
    Route::get('/search', [App\Http\Controllers\RenterController::class, 'search'])->name('renter-search');
    Route::get('/profile', [App\Http\Controllers\RenterController::class, 'profile'])->name('renter-profile');
});

