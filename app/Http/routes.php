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
Route::get('/', 'PostsController@index');

Route::get('admin','PostsAdminController@index');



Route::get('blogs', 'TestController@blog');
Route::get('laravel-version', function() {
    $laravel = app();
    return "Sua versão do Laravel é ".$laravel::VERSION;
});
