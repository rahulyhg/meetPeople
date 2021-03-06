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

Route::get('/', 'WelcomeController@check');
Route::post('/', 'WelcomeController@store');
Route::get('/welcome', 'WelcomeController@welcome');

Route::resource('users', 'UserController');

Route::get('/collection/{user}', 'PlanetRelationController@index');
Route::get('/compare/{usersRelation}', 'PlanetRelationController@show');
Route::get('/compare','PlanetRelationController@showMore');