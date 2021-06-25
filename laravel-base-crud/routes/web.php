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


// Route::get('/', 'HomeController@index')->name('home');
Route::get('/comics', 'ComicController@index')->name('comics.index');
Route::get('/comics/create', 'ComicController@create')->name('comics.create');
Route::post('/comics/store', 'ComicController@store')->name('comics.store');
Route::get('/comics/{id}', 'ComicController@show')->name('comics.show');
Route::get('/comics/{id}/edit', 'ComicController@edit')->name('comics.edit');
Route::match(["PUT", "PATCH"], '/comics/{id}/update', 'ComicController@update')->name('comics.update');
Route::delete('/comics/{id}', 'ComicController@destroy')->name('comics.destroy');

