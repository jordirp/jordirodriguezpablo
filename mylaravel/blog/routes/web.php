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

Route::get('/', function () {
    return view('welcom2');
});

Route::get('Hola', function () {
    return view('Hola');
});

Route::get('app', function () {
    return view('app');
});

Route::get('Laravelç', function () {
    return view('Laravelç');
});




//Whatever
