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
Route::get('/', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::group(['middleware' => 'checkrole'], function(){
		Route::resource('user', 'UserController', ['except' => ['show']]);
		Route::get('user/dataUser', 'UserController@dataUser')->name('user.dataUser');
	});
	Route::group(['prefix' => 'profile', 'as' => 'profile'], function(){
		Route::get('/', 'ProfileController@edit')->name('.edit');
		Route::put('/', 'ProfileController@update')->name('.update');
		Route::put('/password', 'ProfileController@password')->name('.password');
	});
	Route::group(['prefix' => 'member', 'as' => 'member'], function(){
		Route::get('/', 'MemberController@index')->name('.index');
		Route::get('/create', 'MemberController@create')->name('.create');
		Route::post('/', 'MemberController@store')->name('.store');
		Route::put('/{id}', 'MemberController@update')->name('.update');
	});
	Route::group(['prefix' => 'income', 'as' => 'income'], function(){
		Route::get('/', 'IncomeController@index')->name('.index');
		Route::get('/dataincome', 'IncomeController@dataincome')->name('.dataincome');
		Route::get('/create', 'IncomeController@create')->name('.create');
		Route::post('/', 'IncomeController@store')->name('.store');
		Route::put('/{id}', 'IncomeController@update')->name('.update');
	});
});

