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

Route::get('/', 'PhonebookController@getIndex');

Route::get('/add', ['as' => 'add',  'uses' => 'PhonebookController@getAdd']);
Route::post('/add', ['as' => 'addrecord',  'uses' => 'PhonebookController@postAdd']);

Route::get('/edit/{id?}', ['as' => 'edit', 'uses' => 'PhonebookController@getEdit']);
Route::post('/edit/{id?}', ['as' => 'editrecord',  'uses' => 'PhonebookController@postEdit']);
