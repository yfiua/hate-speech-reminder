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
    return view('index');
});

Route::get('/user', function () {
    return view('user');
});

Route::get('/forum', function () {
    return view('forum');
});


Route::get('/admin-config', function () {
    return view('admin-config');
});

Route::post('/post-message', 'MainController@postMessage');
Route::post('/admin-config', 'MainController@postAdminConfig');
