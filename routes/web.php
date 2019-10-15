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
    return view('index');
});

Route::get('about', function () {
    return view('about');
});

Route::get('faqs', function () {
    return view('faqs');
});

Route::get('ideias', function () {
    return view('ideias');
});

Route::get('principal', function () {
    return view('principal');
});

Route::post('ideias/insert','IdeiasController@InsertIdeia');