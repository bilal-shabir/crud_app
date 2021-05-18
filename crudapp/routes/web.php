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

Route::get('/', function(){
    return view('welcome');
}); 
Route::get('/user', 'App\Http\Controllers\UsersController@index');  
Route::post('/user', 'App\Http\Controllers\UsersController@store');
Route::put('/user/{id}', 'App\Http\Controllers\UsersController@update');
Route::get('/user/{id}/delete', 'App\Http\Controllers\UsersController@destroy');
Route::get('/user/create', 'App\Http\Controllers\UsersController@create');
Route::get('/user/{id}', 'App\Http\Controllers\UsersController@show');
Route::get('/user/{id}/edit', 'App\Http\Controllers\UsersController@edit');

