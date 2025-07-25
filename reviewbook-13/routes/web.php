<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\genresController;

Route::get('/', [DashboardController::class, 'home']);
Route::get('/register', [FormController::class, 'showregistrasi']);
Route::post('/welcome', [FormController::class, 'akhir']);

//crud genres
//c=>create data
Route::get('/genres/create', [genresController::class, 'create']);
Route::post('/genres/store', [genresController::class, 'store']);

//r=>read data
Route::get('/genres', [genresController::class, 'index']);
Route::get('/genres/{id}', [genresController::class, 'show']);

//U=>update data
Route::get('/genres/{id}/edit', [genresController::class, 'edit']);
Route::put('/genres/{id}', [genresController::class, 'update']);

//D=>delete data
Route::delete('/genres/{id}', [genresController::class, 'destroy']);