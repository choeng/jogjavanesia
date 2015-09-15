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

Route::get('/', function () {
    return View::make('home');
});

Route::get('tourism','TourismController@view');

Route::get('tourism-facilities','TourismFacilitiesController@view');

Route::get('tourism-attraction','TourismAttractionController@view');