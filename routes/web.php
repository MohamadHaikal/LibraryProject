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

Route::get('/', 'PagesController@index');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/book/create', 'BookController@create')->name('Book.create');

Route::post('/book/store', 'BookController@store')->name('Book.store');



Route::get('/language/create', 'LanguageController@create')->name('language.create');

Route::post('/language/store', 'LanguageController@store')->name('language.store');


Route::get('/department/create', 'DepartmentController@create')->name('department.create');

Route::post('/department/store', 'DepartmentController@store')->name('department.store');

Route::get('/language/', 'LanguageController@index')->name('language.index');

Route::get('/authors/create', 'AuthorController@create')->name('Authors.create');
Route::get('/authors', 'AuthorController@index')->name('Authors.index');
Route::post('/authors/store', 'AuthorController@store')->name('Authors.store');
Route::get('/authors/{id}', 'AuthorController@destroy')->name('Authors.destroy');
Route::get('/authors/{id}/edit', 'AuthorController@edit')->name('Authors.edit');
Route::post('/authors/{id}/update', 'AuthorController@update')->name('Authors.update');



Route::get('/department/', 'DepartmentController@index')->name('department.index');
Route::get('/book/', 'BookController@index')->name('Book.index');


Route::get('/book/{id}', 'BookController@destroy')->name('Book.destroy');
Route::get('/department/{id}', 'DepartmentController@destroy')->name('department.destroy');
Route::get('/language/{id}', 'LanguageController@destroy')->name('language.destroy');


Route::get('/book/{id}/edit', 'BookController@edit')->name('Book.update');
Route::get('/department/{id}/edit', 'DepartmentController@edit')->name('department.update');
Route::get('/language/{id}/edit', 'LanguageController@edit')->name('language.update');


Route::post('/department/{id}/update', 'DepartmentController@update')->name('department.update');
Route::post('/language/{id}/update', 'LanguageController@update')->name('language.update');
Route::post('/book/{id}/update', 'BookController@update')->name('department.update');


Route::get('/search', 'PagesController@search')->name('search_result');

Route::get('/details{id}', 'PagesController@details');
