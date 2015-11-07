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

//Blog routes
Route::get('/blog', 'BlogController@getBlog');
Route::get('/blog/new-post', 'BlogController@getNew');
Route::post('/blog/publish-post', 'BlogController@postPublish');
Route::post('/blog/post-deleted', 'BlogController@postDelete');
Route::get('/blog/{id}', 'BlogController@getPost');

//Events routes
Route::get('/life-events', 'EventsController@getEvents');
Route::get('/life-events/new-event', 'EventsController@getNew');
Route::post('/life-events/publish', 'EventsController@postPublish');
Route::post('/life-events/event-deleted', 'EventsController@postDelete');