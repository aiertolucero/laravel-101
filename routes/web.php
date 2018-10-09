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

Route::get('/users', 'UsersController@getUsers');
Route::get('/add-user', 'UsersController@addUser');
Route::post('/add-user', 'UsersController@saveUser');


Route::get('/groups', 'GroupsController@getGroups');
Route::get('/add-group', 'GroupsController@addGroup');
Route::post('/add-group', 'GroupsController@saveGroup');