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


Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('groups', 'GroupController');

Route::resource('tags', 'TagController');

Route::resource('userDetails', 'User_detailsController');

Route::resource('userSubscriptions', 'User_subscriptionsController');

Route::resource('userSeats', 'User_seatsController');

Route::resource('builds', 'BuildController');

Route::resource('apps', 'AppController');

Route::resource('groupAppBuilds', 'Group_App_BuildController');



////custom 


Route::post('addbuilds','BuildController@addBuilds');