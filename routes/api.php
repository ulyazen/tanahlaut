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
Route::put('/user/admin/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'updateAdmin']);
Route::put('/user/admin-zona/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'updateAdminZona']);
Route::put('/user/super-admin/{id}', [App\Http\Controllers\Auth\RegisterController::class, 'updateSuperAdmin']);

Route::put('/pra-rka/admin/{id}', [App\Http\Controllers\PraRkaController::class, 'updateAdmin']);
Route::put('/pra-rka/admin-zona/{id}', [App\Http\Controllers\PraRkaController::class, 'updateAdminZona']);
Route::put('/pra-rka/super-admin/{id}', [App\Http\Controllers\PraRkaController::class, 'updateSuperAdmin']);

Route::put('/rka/admin/{id}', [App\Http\Controllers\RkaController::class, 'updateAdmin']);
Route::put('/rka/admin-zona/{id}', [App\Http\Controllers\RkaController::class, 'updateAdminZona']);
Route::put('/rka/super-admin/{id}', [App\Http\Controllers\RkaController::class, 'updateSuperAdmin']);

Route::put('/bku/super-admin/{id}', [App\Http\Controllers\BkuController::class, 'updateAdmin']);
Route::put('/bku/admin-zona/{id}', [App\Http\Controllers\BkuController::class, 'updateAdminZona']);
Route::put('/bku/super-admin/{id}', [App\Http\Controllers\BkuController::class, 'updateSuperAdmin']);

Route::put('/spj/super-admin/{id}', [App\Http\Controllers\SpjController::class, 'updateAdmin']);
Route::put('/spj/admin-zona/{id}', [App\Http\Controllers\SpjController::class, 'updateAdminZona']);
Route::put('/spj/super-admin/{id}', [App\Http\Controllers\SpjController::class, 'updateSuperAdmin']);
