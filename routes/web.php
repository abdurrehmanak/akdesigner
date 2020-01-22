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
Route::get('welcome', 'WelcomeController@index');
Route::post('add', 'WelcomeController@add');
Route::get('edit/{id}', 'WelcomeController@edit');
Route::post('update/{id}', 'WelcomeController@update');
Route::get('delete/{id}', 'WelcomeController@delete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/profile', 'ProfileController@index');
