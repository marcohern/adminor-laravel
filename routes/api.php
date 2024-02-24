<?php

use App\Http\Controllers\Basics\AuthController;
use App\Http\Controllers\Basics\UserController;
use App\Http\Controllers\Configs\HeadersConfigController;
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

  Route::get ('/headers'         , [HeadersConfigController::class, 'index']);
  Route::post('/headers'         , [HeadersConfigController::class, 'create']);
  Route::post('/headers/upload-logo', [HeadersConfigController::class, 'logo']);
  Route::post('/headers/upload-logo-bw', [HeadersConfigController::class, 'logobw']);
  Route::post('/recover-password', [AuthController::class         , 'recoverPassword']);
  Route::get ('/user'            , [AuthController::class         , 'user']);
});