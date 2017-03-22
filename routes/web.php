<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'HomeController@index');
Route::resource('/profile', 'UserController');
Route::resource('/users', 'UserController');
Route::resource('/admin', 'UserController');
Route::resource('injury_card', 'Injury_cardsController');

Route::resource('/protocollen','ProtocollenController');

Route::get('/airway','RoutesController@airway' );
Route::get('/breathing','RoutesController@breathing');

Route::get('/createuser', function()
{
    return View::make('admin/createuser');
});

Route::get('/edit', function()
{
    return View::make('admin/edit');
});


