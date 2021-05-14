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
    return view('welcome');
});

Route::view('home', 'home')->middleware('auth');
//Route::view('gewinner', 'gewinner')->middleware('auth');
//Route::view('gift', 'gift')->middleware('auth');
Route::get('gewinner','App\Http\Controllers\ViewController@index')->middleware('auth');
Route::get('gift', 'App\Http\Controllers\ViewController@check')->middleware('auth');
Route::post('edit','App\Http\Controllers\ViewController@update')->middleware('auth');

