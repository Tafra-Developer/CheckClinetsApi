<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CleintController;
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


Route::get('/clients',[CleintController::class,'index']);
Route::get('/clients/{id}',[CleintController::class,'show']);
Route::post('/clients',[CleintController::class,'store']);
Route::put('/clients/{id}',[CleintController::class,'updtae']);
Route::delete('/cleints/{id}',[CleintController::class,'destroy']);
