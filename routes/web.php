<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Guest\MovieController as MovieController;
use  App\Http\Controllers\Guest\HomeController as HomeController;
use  App\Http\Controllers\Guest\AboutController as AboutController;

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

Route::get('/', [HomeController::class,'index'])->name('home');

Route::get('/movie', [MovieController::class, 'index'])->name('movie');


Route::get('/about', [AboutController::class, 'index'] )->name('about');