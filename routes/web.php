<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\LocationManagementController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\IngredientController;
use App\Http\Controllers\BuilderController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LocationController;

/*
====================================
          Public Routes
====================================
*/

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/menu', [HomeController::class, 'menu'])->name('home.menu');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/hiring', [HomeController::class, 'hiring'])->name('home.hiring');
Route::get('/shipping', [HomeController::class, 'shipping'])->name('home.shipping');
Route::get('/fresh', [HomeController::class, 'fresh'])->name('home.fresh');
Route::get('/covid', [HomeController::class, 'covid'])->name('home.covid');
Route::get('/coming_soon', [HomeController::class, 'comingSoon'])->name('home.coming_soon');

Route::get('/builder', [BuilderController::class, 'index'])->name('builder.index');

Route::get('/ingredient/{id}/photo', [IngredientController::class, 'photo'])->name('ingredient.photo');

/*
====================================
           Admin Routes
====================================
*/
Route::prefix('admin')->group(function() {
  Route::prefix('auth')->group(function() {
    Route::get('login', [AuthController::class, 'viewLogin'])->name('admin.auth.login')->middleware('guest');
    Route::post('login', [AuthController::class, 'login'])->name('admin.auth.login.submit')->middleware('guest');
    Route::post('logout', [AuthController::class, 'logout'])->name('admin.auth.logout')->middleware('auth');
  });

  Route::middleware('auth')->group(function() {
    Route::get('/', [LocationManagementController::class, 'index'])->name('location.index');
    Route::get('/location/{location}', [LocationManagementController::class, 'manage'])->name('location.manage');
    Route::get('/location/{location}/edit', [LocationManagementController::class, 'edit'])->name('location.edit');
    Route::post('/location/{location}/edit', [LocationManagementController::class, 'update'])->name('location.update');

    Route::get('/ingredient/{ingredient}', [LocationManagementController::class, 'editIngredient'])->name('ingredient.edit');
    Route::post('/ingredient/{ingredient}', [LocationManagementController::class, 'updateIngredient'])->name('ingredient.update');
    Route::delete('/ingredient/{ingredient}', [LocationManagementController::class, 'deleteIngredient'])->name('ingredient.delete');
  });
});
