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
Route::get('data/{uid}',['as'=>'get.data','uses'=>'DataController@getData']);
Route::get('current/{id}',['as'=>'get.data','uses'=>'DataController@getCurrent']);
Route::get('dataardui/{uid}',['as'=>'get.data','uses'=>'DataController@getDataArdui']);
Route::get('dataarduippm/{uid}',['as'=>'get.data','uses'=>'DataController@getDataArduiAll']);
Route::get('setdata',['as'=>'get.setdata','uses'=>'DataController@setData']);
Route::get('allcay',['as'=>'get.allcay','uses'=>'DataController@allcay']);
Route::get('setsys/{id}',['as'=>'get.setsys','uses'=>'DataController@setSysIn']);
Route::get('chitietcay/{id}',['as'=>"get.chitietcay",'uses'=>'DataController@chitietcay']);
Route::get('luucmnd',['as'=>"get.luucmnd",'uses'=>'DataController@luucmnd']);

Route::get('/dashboard', ['as'=>'dashboard.index','uses'=>'DashboardController@index']);
Route::resource('/tree', 'TreeController');