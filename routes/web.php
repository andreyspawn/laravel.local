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
    return view('welcome');
});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix' => 'admin','namespace'=>'Admin'], function() {
    Route::get('/','HomeController@admin');
    Route::get('/tags','TagsController@index')->name('tag.list');
    Route::get('/tags/delete/{id}','TagsController@delete')->name('tag.delete');
    Route::get('/tags/create','TagsController@createForm');
    Route::post('/tags/store','TagsController@store')->name('tag.store');
});

Route::get('/redirect','HomeController@redirect')->name('redir');
