<?php

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

Route::get('/', function () {
    return view('homevirux');
});

Route::get('/presskit', function () {
    return view('presskit');
})->name('presskit');

Route::get('/homevirux', function () {
    return view('homevirux');
})->name('homevirux');