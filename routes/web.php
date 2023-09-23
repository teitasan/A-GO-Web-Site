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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', function () {
    return view('index'); 
}) ->name ('index');

Route::get('/movie', function () {
    return view('movie'); 
}) ->name ('movie');

Route::get('/profile', function () {
    return view('profile'); 
}) ->name ('profile');

Route::get('/live', function () {
    return view('live'); 
}) ->name ('live');