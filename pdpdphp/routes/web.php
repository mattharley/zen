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
    return view('welcome');
});

Route::get('/nested', function () {
    return view('nested');
});

Route::get('/first', '\App\Http\Controllers\ObviousController@first');
Route::get('/second', '\App\Http\Controllers\ObviousController@second');
Route::get('/third', '\App\Http\Controllers\ObviousController@third');

Route::get('/errors', function () {
    return (string) @(5 / 0);
});
