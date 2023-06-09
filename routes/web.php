<?php

use Illuminate\Support\Facades\Route;
use  App\Http\Controllers\Guest\MovieController as MovieController;
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

Route::get('/movie', function () {
    $title= 'Page movie';
    return view('pages.movie', compact('title'));
})->name('movie');

Route::get('/', [MovieController::class, 'index'])->name('home');


Route::get('/about', function () {
    $title= 'Page About';
    return view('pages.about', compact('title'));
})->name('about');