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

Route::get('/', function () {
    return view('master.index');
});


Route::get('/', function () {
    return view('pages.dashboard');
})->name('pages.dashboard');

Route::get('/sumon', function () {
    return view('pages.sumon');
})->name('sumon.page');


Route::get('/card', function () {
    return view('pages.card');
})->name('card.page');

