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


Route::get('one-to-one-store','OneToOneController@storeOneToOne');
Route::get('one-to-one','oneToOneController@oneToOne');
Route::get('one-to-one-update','oneToOneController@updateOneToOne');
Route::get('one-to-one-delete','oneToOneController@deleteOneToOne');

Route::get('one-to-many-store','OneToManyController@storeOneToMany');
Route::get('one-to-many','oneToManyController@oneToMany');
Route::get('one-to-many-update','oneToManyController@updateOneToMany');
Route::get('one-to-many-delete','oneToManyController@deleteOneToMany');
