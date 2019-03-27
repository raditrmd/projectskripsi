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

Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/dbarang', 'stockController@index');


Route::get('/dpenjualan', 'AdminController@dpenjualan');
Route::get('/darea', 'AdminController@darea');

Route::post('/dbarang','stockController@create');

Route::resource('dbarang','stockController');

Route::get('/dlangganan', 'data_langgananController@index');
Route::post('/dlangganan','data_langgananController@create');

Route::resource('dlangganan','data_langgananController');
