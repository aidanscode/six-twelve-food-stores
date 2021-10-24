<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BuilderController;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/menu', [HomeController::class, 'menu'])->name('home.menu');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::get('/hiring', [HomeController::class, 'hiring'])->name('home.hiring');
Route::get('/shipping', [HomeController::class, 'shipping'])->name('home.shipping');
Route::get('/fresh', [HomeController::class, 'fresh'])->name('home.fresh');
Route::get('/covid', [HomeController::class, 'covid'])->name('home.covid');
Route::get('/coming_soon', [HomeController::class, 'comingSoon'])->name('home.coming_soon');

Route::get('/builder', [BuilderController::class, 'index'])->name('builder.index');
