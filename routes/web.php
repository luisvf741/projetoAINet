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
    return view('home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/listUsers', 'UserController@listUsers')->name('listUsers');

Route::get('/profile/{user}', 'UserController@profile')->name('profile');

Route::get('/profile/{user}/edit', 'UserController@edit')->name('edit_user');

Route::put('/profile/{user}/edit', 'UserController@update')->name('update_user');

Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::get('/request', 'PedidoController@showNewRequestForm')->name('request');
