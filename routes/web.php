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

Route::get('/job/api', 'JobController@index');
Route::get('/job/api/{id}', 'JobController@show');
Route::get('/job/api/access_key={apikey}', 'JobControllerr@index')->middleware('APIkey');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
