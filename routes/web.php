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

Route::get('/registrationPersonList', function () {
    return view('pages.registrationPersonList');
})->name('registrationPersonList.page');


Route::get('/committeeList', function () {
    return view('pages.committeeList');
})->name('committeeList.page');

Route::get('/committeeFlowchart', function () {
    return view('pages.committeeFlowchart');
})->name('committeeFlowchart.page');

