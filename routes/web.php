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

Route::get('/', 'NavController@librairie' );
Route::get('/insert', 'NavController@insert');
Route::get('/update', 'NavController@update');
Route::get('/insertGenre', 'NavController@insertGenre');

Route::post('/insert', 'ActionController@insertOne');
Route::post('/delete', 'ActionController@deleteOne');
Route::post('/update', 'ActionController@updateOne');
Route::post('/insertGenre', 'ActionController@insertOneGenre');


