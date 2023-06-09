<?php

use App\Http\Controllers\Basics\AuthController;
use App\Http\Controllers\Basics\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware(['auth:api'])->group(function () {
    Route::resource('users', UserController::class);

    Route::post('/recover-password', [AuthController::class, 'recoverPassword']);
  Route::get ('/user'            , [AuthController::class, 'user']);
});


