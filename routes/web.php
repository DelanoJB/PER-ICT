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
Route::resource('/injury_card', 'Injury_cardsController');

Route::resource('/protocollen','ProtocollenController');

//Hoofdstuk3
Route::get('/airway','RoutesController@airway' );
Route::get('/breathing','RoutesController@breathing');
Route::get('/circulation','RoutesController@circulation');
Route::get('/disability','RoutesController@disability');
Route::get('/exposure','RoutesController@exposure');

//Hoofdstuk4
Route::get('/misselijkheid','RoutesController@misselijkheid');
Route::get('/onrust','RoutesController@onrust');
Route::get('/pijnbestrijding','RoutesController@pijnbestrijding');
Route::get('/shock','RoutesController@shock');
Route::get('/wegraking','RoutesController@wegraking');

//Hoofdstuk5
Route::get('/reanimatie','RoutesController@reanimatie');
Route::get('/reanimatievolwassene','RoutesController@reanimatievolwassene');
Route::get('/reanimatiekind','RoutesController@reanimatiekind');
Route::get('/ROSC','RoutesController@ROSC');

//Hoofdstuk6
Route::get('/acuutcoronairsyndroom','RoutesController@acuutcoronairsyndroom');
Route::get('/acuutcoronairsyndroomregio','RoutesController@acuutcoronairsyndroomregio');
Route::get('/astmacardiale','RoutesController@astmacardiale');
Route::get('/bradycardievolwassene','RoutesController@bradycardievolwassene');
Route::get('/bradycardiekind','RoutesController@bradycardiekind');
Route::get('/cardiogeneshock','RoutesController@cardiogeneshock');
Route::get('/LVAD','RoutesController@LVAD');
Route::get('/pacemaker','RoutesController@pacemaker');
Route::get('/tachycardievolwassene','RoutesController@tachycardievolwassene');
Route::get('/tachycardiekind','RoutesController@tachycardiekind');

//Hoofdstuk7
Route::get('/acutebijnierschorsinsufficientie','RoutesController@acutebijnierschorsinsufficientie');
Route::get('/ALTE','RoutesController@ALTE');
Route::get('/anafylxieallergie','RoutesController@anafylxieallergie');
Route::get('/astmabronchiale','RoutesController@astmabronchiale');
Route::get('/epiglottitis','RoutesController@epiglottitis');
Route::get('/hypohyperthermie','RoutesController@hypohyperthermie');
Route::get('/hypohyperglykemie','RoutesController@hypohyperglykemie');
Route::get('/intoxicaties','RoutesController@intoxicaties');
Route::get('/intoxicatiesspecifiek','RoutesController@intoxicatiesspecifiek');
Route::get('/laryngitissubglottica','RoutesController@laryngitissubglottica');
Route::get('/neusbloeding','RoutesController@neusbloeding');
Route::get('/obstructietracheacanule','RoutesController@obstructietracheacanule');
Route::get('/pijnlijkesikkelcelcrisis','RoutesController@pijnlijkesikkelcelcrisis');

Route::get('/createuser', function()
{
    return View::make('admin/createuser');
});

Route::get('/edit', function()
{
    return View::make('admin/edit');
});


