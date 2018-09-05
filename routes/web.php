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

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', 'DevicesController@home');

Route::post('/insert', 'DevicesController@add');

Route::get('/update/{id}', 'DevicesController@update');

Route::post('/edit/{id}', 'DevicesController@updateData');

Route::get('/delete/{id}', 'DevicesController@delete');

Route::get('/view/{id}', 'DevicesController@view');