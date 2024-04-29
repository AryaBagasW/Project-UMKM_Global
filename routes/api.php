<?php

use App\Http\Controllers\PemilikController;
use App\Http\Controllers\UMKMController;
use App\Http\Controllers\MasterJenisController;
use App\Http\Controllers\MasterKbliController;
use App\Http\Controllers\MasterSektorController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/umkms', [UMKMController::class, 'index']);
Route::post('/umkms', [UMKMController::class, 'store']);
Route::patch('/umkms/{id}', [UMKMController::class, 'update']);
Route::delete('/umkms/{id}', [UMKMController::class, 'delete']);

Route::get('/pemiliks', [PemilikController::class, 'index']);
Route::post('/pemiliks', [PemilikController::class, 'store']);
Route::patch('/pemiliks/{id}', [PemilikController::class, 'update']);
Route::delete('/pemiliks/{id}', [PemilikController::class, 'delete']);

Route::get('/jenis', [MasterJenisController::class, 'index']);
Route::post('/jenis', [MasterJenisController::class, 'store']);
Route::patch('/jenis/{id}', [MasterJenisController::class, 'update']);
Route::delete('/jenis/{id}', [MasterJenisController::class, 'delete']);

Route::get('/kblis', [MasterKbliController::class, 'index']);
Route::post('/kblis', [MasterKbliController::class, 'store']);
Route::patch('/kblis/{id}', [MasterKbliController::class, 'update']);
Route::delete('/kblis/{id}', [MasterKbliController::class, 'delete']);

Route::get('/sektors', [MasterSektorController::class, 'index']);
Route::post('/sektors', [MasterSektorController::class, 'store']);
Route::patch('/sektors/{id}', [MasterSektorController::class, 'update']);
Route::delete('/sektors/{id}', [MasterSektorController::class, 'delete']);