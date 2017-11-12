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

Route::group(['middleware' => 'terms'], function (){
    Route::get('/home', ['as'=> 'home', 'middleware' => 'terms','uses' => 'HomeController@index']);
    Route::get('dashboard', function (){
        return 'Dashboard';
    });
});

Route::auth();



Route::get('/terms', [ 'as' => 'terms.index', 'uses' => 'AppController@terms' ]);
Route::post('/terms', [ 'as' => 'terms.accept', 'uses' => 'AppController@termsAccept' ]);
