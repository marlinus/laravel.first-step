<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\CityController;
use App\Http\Controllers\EventController;



Route::get('/', [CityController::class, 'index']);
Route::get('/create', [CityController::class, 'create']);
Route::post('/create/store', [CityController::class, 'store']);
Route::get('/edit/{id}', [CityController::class, 'edit']);
Route::post('/update/{id}', [CityController::class, 'update']);
Route::post('/delete/{id}', [CityController::class, 'destroy']);


Route::get('test-event', [EventController::class, 'index']);
Route::post('test-event', [EventController::class, 'index']);
