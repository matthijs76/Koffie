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

Route::get('/', 'PagesController@home');
Route::get('/gallery1', 'PagesController@gallery1');
Route::get('/boeking_info', 'PagesController@boeking_info');

Route::get('/agenda', 'ListController@show' );
Route::get('list','ListController@index');
Route::post('list','ListController@create');
Route::post('delete','ListController@delete');
Route::post('update','ListController@update');

Route::get('/contact',  [
    'uses' => 'ContactMessageController@create'
]);
Route::post('/contact',  [
    'uses' => 'ContactMessageController@store',
    'as' => 'contact.store'
]);



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
