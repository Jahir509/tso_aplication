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
Route::get('/','TsoController@index')->name('tso.index');
Route::get('/tso','TsoController@index')->name('tso.index');
Route::get('/tso/create','TsoController@create')->name('tso.create');
Route::post('/tso','TsoController@store')->name('tso.store');
Route::get('/tso/edit/{id}','TsoController@edit')->name('tso.edit');
Route::put('/tso/{id}','TsoController@update')->name('tso.update');
Route::get('/tso/{id}','TsoController@show')->name('tso.show');


Route::get('/map','TsoMappingController@index')->name('map.index');
Route::post('/map','TsoMappingController@store')->name('map.store');
Route::get('/map/create','TsoMappingController@create')->name('map.create');
Route::get('/map/edit/{id}','TsoMappingController@edit')->name('map.edit');
Route::put('/map/{id}','TsoMappingController@update')->name('map.update');
Route::get('/map/{id}','TsoMappingController@show')->name('map.show');

Route::get('/thana','ThanaController@index')->name('thana.index');


