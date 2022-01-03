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

Route::get('/', function() {
    return redirect(route('login'));
});
Route::get('/starter', function() {
    return view('starter');
});

Auth::routes(['verify' => false, 'reset' => false]);

Route::middleware('auth')->group(function() {
    Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
});

//genre route
Route::get('/genre', 'GenreController@index')->name('genreList');
Route::get('/genre/create', 'GenreController@create')->name('genreForm');
Route::post('/genre/store', 'GenreController@store')->name('genreSave');
Route::get('/genre/edit/{genre}', 'GenreController@edit')->name('genreEdit');
Route::post('/genre/edit/{genre}', 'GenreController@update')->name('genreUpdate');
Route::get('/genre/delete/{genre}', 'GenreController@destroy')->name('genreDelete');

//customer route
Route::get('/customer', 'CustomerController@index')->name('customerList');
Route::get('/customer/create', 'CustomerController@create')->name('customerForm');
Route::post('/customer/store', 'CustomerController@store')->name('customerSave');
Route::get('/customer/edit/{customer}', 'CustomerController@edit')->name('customerEdit');
Route::post('/customer/edit/{customer}', 'CustomerController@update')->name('customerUpdate');
Route::get('/customer/delete/{customer}', 'CustomerController@destroy')->name('customerDelete');


//film route
Route::get('/film', 'FilmController@index')->name('filmList');
Route::get('/film/create', 'FilmController@create')->name('filmForm');
Route::post('/film/store', 'FilmController@store')->name('filmSave');
Route::get('/film/edit/{film}', 'FilmController@edit')->name('filmEdit');
Route::post('/film/edit/{film}', 'FilmController@update')->name('filmUpdate');
Route::get('/film/delete/{film}', 'FilmController@destroy')->name('filmDelete');

//studio route
Route::get('/studio', 'StudioController@index')->name('studioList');
Route::get('/studio/create', 'StudioController@create')->name('studioForm');
Route::post('/studio/store', 'StudioController@store')->name('studioSave');
Route::get('/studio/edit/{studio}', 'StudioController@edit')->name('studioEdit');
Route::post('/studio/edit/{studio}', 'StudioController@update')->name('studioUpdate');
Route::get('/studio/delete/{studio}', 'StudioController@destroy')->name('studioDelete');

//booking route
Route::get('/booking', 'BookingController@index')->name('bookingList');
Route::get('/booking/create', 'BookingController@create')->name('bookingForm');
Route::post('/booking/store', 'BookingController@store')->name('bookingSave');
Route::get('/booking/edit/{booking}', 'BookingController@edit')->name('bookingEdit');
Route::post('/booking/edit/{booking}', 'BookingController@update')->name('bookingUpdate');
Route::get('/booking/delete/{booking}', 'BookingController@destroy')->name('bookingDelete');
