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

// php artisan make:controller UserController --resource
// php artisan route:list

Route::get('/', function () {
return view('dashboard');
});

// Routes: Users
Route::get('/users','UserController@index')->name('users');




Route::get('/users/create','UserController@create')->name('user.create');
Route::post('/users/store','UserController@store')->name('user.store');
Route::get('/users/edit/{id}','UserController@edit')->name('user.edit');
Route::post('/users/update/{id}','UserController@update')->name('user.update');
Route::get('/users/delete/{id}','UserController@delete')->name('user.delete');


