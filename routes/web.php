<?php

use Illuminate\Support\Facades\Route;

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
    return view('landing');
});

Auth::routes();

Route::get('/dashboard', 'HomeController@index')->name('home');

Route::get('/articles', 'NewsController@index');
Route::get('/articles/add', 'NewsController@create');
Route::post('/articles/add', 'NewsController@store');
Route::get('/articles/{article}/edit', 'NewsController@edit');
Route::put('/articles/{article}/update', 'NewsController@update');
Route::delete('/articles/{article}/delete', 'NewsController@destroy');

Route::get('/profile', 'ProfileController@edit');
Route::put('/profile/{profile}/update', 'ProfileController@update');


Route::group(['middleware' => ['role:super-admin']], function () {
    Route::get('/user/pending','ApproveController@index');
    Route::get('/user/approved','ApproveController@approved');
    Route::post('/user/{user}/pending/approve', 'ApproveController@approve');
    Route::post('/user/{user}/pending/revoke', 'ApproveController@revoke');
});



Route::get('/{user}', 'NewsController@profile');

