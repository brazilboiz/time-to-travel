<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', [\App\Http\Controllers\Controller::class, 'index']);
Route::get('/about', [\App\Http\Controllers\Controller::class, 'about']);
Route::get('/tour/{city}', [\App\Http\Controllers\Controller::class, 'getTour']);
Route::get('/search', [\App\Http\Controllers\Controller::class, 'searchTour']);
Route::post('/add_basket', [\App\Http\Controllers\Controller::class, 'addBasket'])->name('add-basket');
Route::post('/remove_tour', [\App\Http\Controllers\Controller::class, 'removeTour'])->name('tour.remove');

