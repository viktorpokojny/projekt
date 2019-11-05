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
    return view('welcome');
});

Route::get('/show/{id}', [
    'as' => 'show', 'uses' => 'UserController@show'
]);

Route::post('/insert', [
    'as' => 'insert', 'uses' => 'UserController@insert'
]);

Route::post('/update/{id}', [
    'as' => 'update', 'uses' => 'UserController@update'
]);

Route::get('/delete', [
    'as' => 'delete', 'uses' => 'UserController@delete'
]);

Route::get('/showall', [
    'as' => 'showall', 'uses' => 'UserController@showAll'
]);

Route::get('/getAddUserForm', [
    'as' => 'getAddUserForm', 'uses' => 'UserController@getAddUserForm'
]);

Route::get('/deleteuser', function () {
    return view('deleteuser');
});
