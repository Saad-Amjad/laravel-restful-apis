<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\AuthController;

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
/**
 * need not use / before  url name. good to user name of the route
 */
Route::post('v1/register', [AuthController::class, 'register'])->name('users.registration');
Route::post('v1/login', [AuthController::class, 'login']);

Route::middleware(['auth:sanctum'])->prefix('v1')->group(function () {
    Route::get('books', [BookController::class, 'index']);
    Route::get('authors', [AuthorController::class, 'index']);
});
