<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::post('/account/{id}/delete', [App\Http\Controllers\AdminController::class, 'deleteAccount']);
    Route::get('/profile', [App\Http\Controllers\AdminController::class, 'deleteAccount']);
});

