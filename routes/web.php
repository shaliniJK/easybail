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

Route::get('/contact', function () {
    return view('contact');
});

// properties
Route::get('/properties', 'PropertyController@index')->name('properties');
Route::get('/properties/create', 'PropertyController@create')->name('properties.create');
Route::get('/properties/{property}', 'PropertyController@show')->name('property');
Route::post('properties', 'PropertyController@store');
Route::patch('properties/{property}', 'PropertyController@update');
Route::delete('properties/{property}', 'PropertyController@destroy');

Route::get('/locataires', 'LocataireController@index')->name('locataires.index');
Route::post('/locataires', 'LocataireController@store');
Route::get('/locataires/create', 'LocataireController@create');
Route::get('/locataires/{locataire}', 'LocataireController@show')->name('locataires.show');
Route::get('/locataires/{locataire}/edit', 'LocataireController@edit');
Route::put('/locataires/{locataire}', 'LocataireController@update');
