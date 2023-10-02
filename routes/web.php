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
    return view('home');
});

Route::get('form', function () {
    return view('form');
});

Route::post('form', 'App\Http\Controllers\FormController@submit');
Route::get('result', 'App\Http\Controllers\FormController@result');
Route::get('db', 'App\Http\Controllers\FormController@db');