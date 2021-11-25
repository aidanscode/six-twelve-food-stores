<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LocationController;

Route::get('location', [LocationController::class, 'index'])->name('api.locations');
Route::get('location/{id}/menu', [LocationController::class, 'getMenuForLocation'])->name('api.locations.menu');
