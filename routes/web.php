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
    return view('landing');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/paiement', 'PaiementController@index')->name('paiement');

Route::get('/contact', function () {
    return view('contact');
});

// properties
Route::get('/properties', 'PropertyController@index')->name('properties');
Route::get('/properties/create', 'PropertyController@create')->name('properties.create');
Route::post('/properties/create', 'PropertyController@store')->name('property.store');
Route::get('/properties/{property}', 'PropertyController@show')->name('properties.show');
Route::get('/properties/{property}/edit', 'PropertyController@edit')->name('properties.edit');
Route::patch('/properties/{property}/edit', 'PropertyController@update')->name('property.update');
Route::delete('/properties/{property}', 'PropertyController@destroy')->name('property.delete');

Route::get('/locataires', 'LocataireController@index')->name('locataires.index');
Route::post('/locataires', 'LocataireController@store');
Route::get('/locataires/create', 'LocataireController@create')->name('locataires.create');
Route::get('/locataires/{locataire}', 'LocataireController@show')->name('locataires.show');
Route::get('/locataires/{locataire}/edit', 'LocataireController@edit')->name('locataires.edit');
Route::put('/locataires/{locataire}', 'LocataireController@update');


Route::get('/locations', 'LocationController@index')->name('locations.index');
Route::post('/locations', 'LocationController@store');
Route::get('/locations/create', 'LocationController@create')->name('locations.create');
Route::get('/locations/{location}', 'LocationController@show')->name('locations.show');
Route::get('/locations/{location}/edit', 'LocationController@edit')->name('locations.edit');
Route::put('/locations/{location}', 'LocationController@update');

Route::get('/paiements', 'PaiementController@index')->name('paiements.index');
Route::post('/paiements', 'PaiementController@store');
Route::get('/paiements/create', 'PaiementController@create')->name('paiements.create');
Route::get('/paiements/{paiement}', 'PaiementController@show')->name('paiements.show');
Route::get('/paiements/{paiement}/edit', 'PaiementController@edit')->name('paiements.edit');
Route::put('/paiements/{paiement}', 'PaiementController@update');



// user profile
Route::get('/profile', 'ProfileController@index')->name('profile');
Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');
