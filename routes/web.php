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
Route::get('/hom', function () {
    return view('home');
});
Route::get('/guru', "GuruController@index");
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'ProfileController@password']);
});
Route::get('/siswa', 'SiswaController@index');
Route::get('/siswa/tambah', 'SiswaController@create');
Route::post('/siswa/store', 'SiswaController@store');
Route::get('/siswa/edit/{id}', 'SiswaController@edit');
Route::post('/siswa/update', 'SiswaController@update');
Route::get('/siswa/hapus/{id}', 'SiswaController@destroy');

