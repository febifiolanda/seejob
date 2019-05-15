<?php

use Illuminate\Http\Request;
/* Setup CORS */
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/job','JobController@index');
Route::get('/job/{id}','JobController@show');
Route::post('/job/store','JobController@store');
Route::post('/job/update/{id}','JobController@update');
Route::post('/job/delete/{id}','JobController@destroy');

Route::get('dataJob','JobController@getData');

