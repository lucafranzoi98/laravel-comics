<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/comics', function () {
   $data = config('comics');
   return view('comics', compact('data'));
})->name('comics');

Route::get('/characters', function () {
   $data = config('comics');
   return view('characters', compact('data'));
})->name('characters');

Route::get('/movies', function () {
   $data = config('comics');
   return view('movies', compact('data'));
})->name('movies');
