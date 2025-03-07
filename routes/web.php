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

Route::redirect('/', 'home');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/create','HomeController@create')->name('create');
Route::post('/store','HomeController@store')->name('store');
Route::get('/tier','TierController@index')->name('tier');
Route::resource('/pokemonSV', 'CalculatorController', ['names' => 'calculator']);
Route::resource('/dokkan', 'DBCalController', ['names' => 'dbcal']);