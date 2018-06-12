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


Route::post('/search','FeesController@search');

Route::get('/','StudentController@index');
Route::get('/student','StudentController@create');
Route::post('/studentstore','StudentController@store');
Route::get('/studenttable','StudentController@show');
Route::get('/studentdestroy/{id}','StudentController@destroy');
Route::get('/studentupdate/{id}','StudentController@update');



Route::get('/feeshome','FeesController@index');
Route::get('/feescreate','FeesController@create');
Route::post('/feesstore','FeesController@store');
Route::get('/feestable','FeesController@show');
Route::get('/feesdestroy/{id}','FeesController@destroy');
Route::get('/feeupdate/{id}','FeesController@update');
Route::get('/feessearch','FeesController@search');
 
