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

Route::get('/dashboard', ['as' => 'admim.dashboard', 'uses'=>'pageController@index']);


Route::resource('/users', 'UsersController');
Route::resource('/assign', 'AssignController');
Route::resource('/events','EventsController');
Route::resource('/gallery', 'GalleryController');
Route::get('/login', 'Auth\LoginController@showLoginForm');
