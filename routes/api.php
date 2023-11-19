<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\NilaiController;


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



Route::get('/Students', [StudentController::class, 'index']);
Route::get('/Students/{id}', [StudentController::class, 'show']);
Route::post('/Students', [StudentController::class, 'store']);
Route::put('/Students/{id}', [StudentController::class, 'update']);
Route::delete('/Students/{id}', [StudentController::class, 'destroy']);
Route::get('/Nilai', [NilaiController::class, 'index']);
Route::get('/Nilai/{id}', [NilaiController::class, 'show']);
Route::post('/Nilai', [NilaiController::class, 'store']);
Route::put('/Nilai/{id}', [NilaiController::class, 'update']);
Route::delete('/Nilai/{id}', [NilaiController::class, 'destroy']);