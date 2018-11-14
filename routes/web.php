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

Route::group(['middleware' => ['web']], function () {
	Route::resource('users', 'UserController');
	Route::resource('potentialUsers', 'PotentialUserController');
	Route::resource('families', 'FamilyController');
	Route::resource('clans', 'ClanController');
});

Route::get('/genealogy', 'GenealogyController@index');

Route::get('/home', 'HomeController@homeindex');

Route::get('/events', 'HomeController@events');

Route::get('/help', 'HomeController@help');

Route::get('/settings', 'HomeController@settings');

Route::get('/album_clan', 'PhotoController@album_clan');

Route::get('/album_user', 'PhotoController@album_user');


