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



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'HomeController@index')->name('home');


// Companies

Route::get('/companies/create', 'CompaniesController@create');
Route::get('/companies/index', 'CompaniesController@index');
Route::post('/companies/store','CompaniesController@store');

Route::get('/companies/{company}/edit', 'CompaniesController@edit');
Route::get('/companies/{company}/destroy', 'CompaniesController@destroy');
Route::post('/companies/{company}/update','CompaniesController@update');


// employees

Route::get('/employees/create', 'EmployeesController@create');
Route::get('/employees/index', 'EmployeesController@index');
Route::post('/employees/store', 'EmployeesController@store');

Route::get('/employees/{employee}/edit', 'EmployeesController@edit');
Route::get('/employees/{employee}/destroy', 'EmployeesController@destroy');
Route::post('/employees/{employee}/update','EmployeesController@update');