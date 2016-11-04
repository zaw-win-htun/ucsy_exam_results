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
Route::post('result' , 'ResultController@results');

Route::get('term' , 'ResultController@term');

Route::get('apidocs' , 'ResultController@apidocs');

Route::get('api' , 'ResultController@api');

Route::get('/api/v1/q','ResultController@filter');

Route::get('result/year/{id}' , 'ResultController@getResultByYear');

Route::get('/' , 'ResultController@index');
