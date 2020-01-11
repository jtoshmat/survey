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

use App\Http\Controllers\TestsController;

Route::get('/', function () {
    return view('welcome');



});

Route::get('tests','TestsController@tests');

Route::get('products','TestsController@products');
Route::get('question/{id}','TestsController@question');
Route::get('users','UsersController@users');


Route::get('rows','SuperController@rows');


Route::get('company','TestsController@option');

Route::get('getstarted','TestsController@getstarted');
