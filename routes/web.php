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

Route::get('/',  'SessionsController@create');

Route::resource('employees','EmployeeController')->middleware('auth');

Route::get('/register', [ 'as' => 'register', 'uses' => 'RegistrationController@create']);
Route::post('register', [ 'as' => 'register', 'uses' => 'RegistrationController@store']);

Route::get('/login', 'SessionsController@create');
Route::post('/login', [ 'as' => 'login', 'uses' => 'SessionsController@store']);

Route::get('/logout', 'SessionsController@destroy');