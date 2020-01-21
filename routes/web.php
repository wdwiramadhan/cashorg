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
	Route::group(['prefix' => 'income', 'as' => 'income'], function(){
		Route::get('/', 'IncomeController@index')->name('.index');
		Route::get('/dataincome', 'IncomeController@dataincome')->name('.dataincome');
		Route::get('/create', 'IncomeController@create')->name('.create');
		Route::post('/', 'IncomeController@store')->name('.store');
		Route::put('/{id}', 'IncomeController@update')->name('.update');
	});
	Route::group(['prefix' => 'type', 'as' => 'type'], function(){
		Route::get('/', 'TypeController@index')->name('.index');
		Route::get('/create', 'TypeController@create')->name('.create');
		Route::post('/', 'TypeController@store')->name('.store');
		Route::delete('/{id}', 'TypeController@destroy')->name('.destroy');
		Route::put('/{id}', 'TypeController@update')->name('.update');
		Route::get('/edit/{id}', 'TypeController@edit')->name('.edit');
	});
	Route::group(['prefix' => 'expenditure', 'as' => 'expenditure'], function(){
		Route::get('/', 'ExpenditureController@index')->name('.index');
		Route::get('/dataexpenditure', 'ExpenditureController@dataexpenditure')->name('.dataexpenditure');
		Route::get('/create', 'ExpenditureController@create')->name('.create');
		Route::post('/', 'ExpenditureController@store')->name('.store');
		Route::put('/{id}', 'ExpenditureController@update')->name('.update');
	});
});

