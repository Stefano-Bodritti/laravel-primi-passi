<?php

use Illuminate\Routing\RouteUrlGenerator;
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
    return view('welcome');
});

Route::get('/home', function () {
    return "<h1>Homepage</h1>";
});

Route::get('/contatti', function () {
    return "<h2>Email</h2><h2>Indirizzo</h2>";
});