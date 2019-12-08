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
Route::get('/invoice', 'InvoiceController@index');

Route::get('/clients', 'ClientsController@index')->name('clients.index');
Route::get('/clients/{id}/edit','ClientsController@edit')->name('clients.edit');
Route::get('/clients/{id}/delete','ClientsController@destroy')->name('clients.destroy');
Route::get('clients/create','ClientsController@create')->name('clients.create');
Route::post('clients/create','ClientsController@store')->name('clients.store');
Route::post('/clients/update','ClientsController@update')->name('clients.update');