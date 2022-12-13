<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
//register routes
Route::post('/register', [App\Http\Controllers\AuthController::class, 'register']);

//login routes
Route::post('/login', [App\Http\Controllers\AuthController::class, 'login']);
//logout routes
Route::post('/logout', [App\Http\Controllers\AuthController::class, 'logout']);
