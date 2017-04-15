<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('push', 'ListController@push');
Route::get('R_push', 'ListController@R_push');

Route::get('print', 'ListController@print_list');

Route::get('delete', 'ListController@delete');
Route::get('R_delete', 'ListController@R_delete');

Route::get('truncate', 'ListController@truncate');

Route::get('insert', 'ListController@insert');
Route::get('R_insert', 'ListController@R_insert');

Route::get('pop', 'ListController@pop');

Route::get('size', 'ListController@size');

Route::get('construct', 'ListController@construct');
Route::get('R_construct', 'ListController@R_construct');

Route::get('/', 'ListController@welcome');









Route::get('/', function () {
    return view('welcome');
});

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
