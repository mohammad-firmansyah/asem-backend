<?php

use App\Http\Controllers\AsetController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AfdellingController;
use App\Http\Controllers\AsetJenisController;
use App\Http\Controllers\AsetKodeController;
use App\Http\Controllers\HakAksesController;
use App\Http\Controllers\StatusPosisiController;
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

Route::apiResource('aset', AsetController::class);
Route::apiResource('afdelling', AfdellingController::class);
Route::apiResource('aset-jenis', AsetJenisController::class);
Route::apiResource('aset-kode', AsetKodeController::class);
Route::apiResource('hak-akses', HakAksesController::class);
Route::apiResource('status-posisi', StatusPosisiController::class);


