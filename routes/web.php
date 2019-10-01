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

Route::get('/', 'PageController@index');
Route::get('/about', 'PageController@about');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'BagController@index');
Route::get('/modify_bag', 'BagController@modify_bag');
Route::get('/club_distance', 'Club_Distance@index');

Route::resource('/dashboard', 'BagController');
Route::resource('/club_distance', 'Club_Distance');
Route::get('/distances', 'Distances@distances');
Route::get('/showclub', 'Club_Distance@showclub');


