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

Route::resource('/protocollen','ProtocollenController');

Route::get('/airway','RoutesController@airway' );
Route::get('/breathing','RoutesController@breathing');
Route::get('/circulation','RoutesController@circulation');
Route::get('/disability','RoutesController@disability');
Route::get('/exposure','RoutesController@exposure');
Route::get('/misselijkheid','RoutesController@misselijkheid');
Route::get('/onrust','RoutesController@onrust');
Route::get('/pijnbestrijding','RoutesController@pijnbestrijding');
Route::get('/shock','RoutesController@shock');
Route::get('/wegraking','RoutesController@wegraking');
Route::get('/reanimatie','RoutesController@reanimatie');
Route::get('/reanimatievolwassene','RoutesController@reanimatievolwassene');
Route::get('/reanimatiekind','RoutesController@reanimatiekind');
Route::get('/ROSC','RoutesController@ROSC');
Route::get('/acuutcoronairsyndroom','RoutesController@acuutcoronairsyndroom');
Route::get('/acuutcoronairsyndroomregio','RoutesController@acuutcoronairsyndroomregio');
Route::get('/astmacardiale','RoutesController@astmacardiale');
Route::get('/bradycardievolwassene','RoutesController@bradycardievolwassene');
Route::get('/bradycardiekind','RoutesController@bradycardiekind');
Route::get('/cardiogeneshock','RoutesController@cardiogeneshock');
Route::get('/LVAD','RoutesController@LVAD');
Route::get('/Pacemaker','RoutesController@Pacemaker');
Route::get('/tachycardievolwassene','RoutesController@tachycardievolwassene');
Route::get('/tachycardiekind','RoutesController@tachycardiekind');
Route::get('/acutebijnierschorsinsufficiëntie','RoutesController@acutebijnierschorsinsufficiëntie');
Route::get('/ALTE','RoutesController@ALte');
Route::get('/anafylxieallergie','RoutesController@anafylxieallergie');
Route::get('/astmabronchiale','RoutesController@astmabronchiale');
Route::get('/epiglottitis','RoutesController@epiglottitis');
Route::get('/hypohyperthermie','RoutesController@hypohyperglykemie');
Route::get('/intoxicaties','RoutesController@intoxicaties');
Route::get('/intoxicaties(specifiek)','RoutesController@intoxicaties(speciefiek)');
Route::get('/laryngitissubglottica','RoutesController@laryngitissubglottica');
Route::get('/neusbloeding','RoutesController@neusbloeding');

Route::get('/admin', function()
{
    return View::make('admin/admin');
});

Route::get('/createuser', function()
{
    return View::make('admin/createuser');
});


