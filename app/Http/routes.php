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
    return view('welcome');
});

Route::auth();

Route::get('/home', ['as'=> 'home', 'middleware' => 'terms','uses' => 'HomeController@index']);

Route::get('/terms', [ 'as' => 'terms.index', 'uses' => 'AppController@terms' ]);
Route::post('/terms', [ 'as' => 'terms.accept', 'uses' => 'AppController@termsAccept' ]);
