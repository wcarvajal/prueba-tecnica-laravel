<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinceController;
use App\Http\Controllers\CityController;


Route::get('/provincias', [ProvinceController::class, 'index']);
Route::post('/api/addProvince', [ProvinceController::class, 'store']);
Route::put('/api/updateProvince', [ProvinceController::class, 'update']);
Route::delete('/api/deleteProvince', [ProvinceController::class, 'destroy']);

