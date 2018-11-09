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

Route::group(['middleware' => 'auth'], function () {
});

Route::get('index', 'AdminPageController@index');

Route::get('patient', 'AdminPageController@patient');

Route::get('event', 'AdminPageController@event');

Route::get('record', 'AdminPageController@record');

Route::get('user', 'AdminPageController@user');

// REPORTS

Route::get('monthly', 'AdminPageController@monthly');
Route::get('quarterly', 'AdminPageController@quarterly');
Route::get('annually', 'AdminPageController@annually');