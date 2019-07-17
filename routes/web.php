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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/* ADMIN */
Route::prefix(config('admin.route.prefix'))->group(function () {
	Route::get('', 'Admin\LoginController@show')->name('admin');
	Route::get('/login', 'Admin\LoginController@show')->name('admin.login');
	Route::post('/login','Admin\LoginController@login');
	//Route::get('/logout','Admin\AdminController@logout');
	Route::post('/logout','AdminController@logout')->name('admin.logout');

	Route::get('/register', 'Admin\RegisterController@show')->name('admin.register');
	Route::post('/register', 'Admin\RegisterController@create');

	Route::get('/dashboard', 'AdminController@index')->name('admin.dashboard');
});