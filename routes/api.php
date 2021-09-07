<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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


Route::post('/login', 'UserController@login');

Route::get('/user', 'UserController@index');
Route::post('/user', 'UserController@store');
Route::put('/user/{id}', 'UserController@update');
Route::delete('/user/{id}', 'UserController@destroy');

Route::get('/news', 'BeritaController@index');
Route::get('/news/{id}', 'BeritaController@spesificNews');
Route::post('/news', 'BeritaController@store');
Route::put('/news/{id}', 'BeritaController@update');
Route::delete('/news/{id}', 'BeritaController@destroy');

Route::get('/pmb', 'PMBController@index');
Route::post('/pmb', 'PMBController@store');
Route::post('/pmb/{id}', 'PMBController@update');
Route::delete('/pmb/{id}', 'PMBController@destroy');

Route::get('/staff', 'UserController@staff');


Route::get('/contactUs', 'ContactUsController@index');
Route::post('/contactUs', 'ContactUsController@store');
