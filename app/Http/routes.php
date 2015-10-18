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
/*
Route::get('/', function () {
    return view('welcome');
});
*/

//Route::get('/', 'PagesController@index');
//Route::get('about', 'PagesController@about');

//facade
//Route::get();

//singleton
//$router->get();

Route::bind('song', function($slug){
	return App\Song::where('slug', $slug)->first();
});

//get('songs', 'SongsController@index');

//get('songs/{slug}', 'SongsController@show');

//get('songs/{slug}/edit', 'SongsController@edit');

//patch( 'songs/{slug}', 'SongsController@update');


//$router->get('music', ['as' => 'songs_path', 'uses' => 'SongsController@index' ]);

//$router->get('music/{slug}', ['as' => 'song_path', 'uses' => 'SongsController@show' ]);

/*$router->resource('songs', 'SongsController', [

	'only' => [	'index', 'show', 'edit', 'update']

	]);*/
/*
$router->resource('{artist/songs}', 'SongsController', [

			'names' => [

				'index' => 'songs_path',
				'show' => 'song_path'

			],

			'only' => ['index', 'show'],

	]);
*/

$router->resource('songs', 'SongsController');