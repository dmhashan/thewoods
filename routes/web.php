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
    return view('pages.home');
});

Route::get('/activities', function () {
    return view('pages.activities');
});

Route::get('/accommodation', function () {
    return view('pages.accommodation');
});

Route::get('/tours', function () {
    return view('pages.tours');
});

Route::get('/conservation', function () {
    return view('pages.conservation');
});

Route::get('/agriculture', function () {
    return view('pages.agriculture');
});

Route::get('/contact', function () {
    return view('pages.contact');
});
