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

Route::get('/admin', function()
{
    return View::make('admin/admin');
});

Route::get('/createuser', function()
{
    return View::make('admin/createuser');
});

