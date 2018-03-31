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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/companies/create', 'CompaniesController@create');
Route::get('/companies/edit', 'CompaniesController@edit');
Route::get('/companies/destroy', 'CompaniesController@destroy');
Route::get('/companies/index', 'CompaniesController@index');

Route::post('/companies/store','CompaniesController@store');
