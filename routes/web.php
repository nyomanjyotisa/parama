<?php

use Illuminate\Support\Facades\Route;

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
    return view('intro');
});

Route::view('/template/1', 'template.template1');
Route::view('/template/2', 'template.template2');
Route::get('/jyoganteng', 'App\Http\Controllers\TokenController@index');
Route::post('/token/new', 'App\Http\Controllers\TokenController@new');

Route::get('/edit/{token}/{editToken}', 'App\Http\Controllers\TokenController@edit');
Route::post('/edit/{token}/{editToken}', 'App\Http\Controllers\TokenController@update');
Route::get('/show/{token}', 'App\Http\Controllers\TokenController@show');
Route::get('/editimage/{token}/{editToken}', 'App\Http\Controllers\TokenController@editimage');
Route::post('/image/{token}/{editToken}', 'App\Http\Controllers\TokenController@updateimage');