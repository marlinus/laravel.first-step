<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CityController;



Route::get('/', [CityController::class, 'index']);

