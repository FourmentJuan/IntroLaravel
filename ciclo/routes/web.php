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


Route::get('/','App\Http\Controllers\UserController@index');
Route::post('users','App\Http\Controllers\UserController@store')->name('users.store');
Route::delete('users/{user}','App\Http\Controllers\UserController@destroy')->name('users.destroy');