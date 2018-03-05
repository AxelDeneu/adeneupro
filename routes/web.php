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

Route::get('/', function () {
    return view('index');
});
Route::get('cv', function() {
    return response()->file("assets/ResumeAxel.pdf");
});

Route::get('projects', 'ProjectsController@index');

Route::post('/send', 'ContactController@send');

Route::get('short/{id?}', 'ShortController@index');

Route::post('short', 'ShortController@addShort');

Route::get('alternate', function(){
	return view('alternate');
});


