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

$this->group(['middleware' => ['auth'], 'namespace' => 'Admin', 'prefix' => 'admin'], function(){

	$this->get('/', 'AdminController@index')->name('admin.home');
	$this->get('movie/{id}', 'AdminController@movie')->name('home.movie');

	$this->post('profile-edit', 'ProfileController@update')->name('profile.update');
	$this->get('profile-edit', 'ProfileController@edit')->name('profile.edit');
	$this->get('profile', 'ProfileController@index')->name('admin.profile');

	$this->get('historic', 'HistoricController@index')->name('admin.historic');

	$this->get('favorite', 'FavoriteController@index')->name('admin.favorite');

	$this->get('help', 'HelpController@index')->name('admin.help');

	$this->get('about', 'AboutController@index')->name('admin.about');
});

Route::resource('admin/manage','Admin\ManageController')->middleware('auth');;

$this->get('/', 'Site\SiteController@index')->name('home');

Auth::routes();

