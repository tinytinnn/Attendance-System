<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\SystemController;


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

// Route::middleware('auth:sanctum')->group(function () {
//     Route::get('/get', [StudentInfoController::class, 'index']);
//     Route::post('/store', [StudentInfoController::class, 'store']);
//     Route::get('/{$id}', [StudentInfoController::class, 'show']);
//     Route::delete('/{id}', [StudentInfoController::class, 'destroy']);
//     Route::put('/{id}', [StudentInfoController::class, 'update']);
// });

Route::controller(SystemController::class)->group(function () {
    Route::get('/get', 'index');
    Route::post('/store', 'store');
    Route::get('/{id}', 'show');
    Route::delete('/{id}', 'destroy');
    Route::put('/{id}', 'update');
});

Route::post('/login', [AuthController::class, 'login']);