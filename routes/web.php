<?php

use Illuminate\Support\Facades\Route;

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

Route::group(['middleware' => 'auth'], function(){
	Route::get('/', 'HomeController@index')->name('home_index');

	Route::group(['prefix' => 'pet'], function(){
		Route::get('/novo', 'PetController@create')->name('pet_create');
		Route::post('/novo', 'PetController@store')->name('pet_store');
		Route::get('/editar/{id}', 'PetController@edit')->name('pet_edit');
		Route::post('/editar', 'PetController@update')->name('pet_update');
		Route::get('/listar', 'PetController@index')->name('pet_index');
		Route::get('/apagar/{id}', 'PetController@destroy')->name('pet_destroy');
	});

	Route::group(['prefix' => 'usuario'], function(){
		Route::get('/novo', 'UserController@create')->name('user_create');
		Route::post('/novo', 'UserController@store')->name('user_store');
		Route::get('/editar/{id}', 'UserController@edit')->name('user_edit');
		Route::post('/editar', 'UserController@update')->name('user_update');
		Route::get('/listar', 'UserController@index')->name('user_index');
		Route::get('/apagar/{id}', 'UserController@destroy')->name('user_destroy');
	});

	Route::group(['prefix' => 'servico'], function(){
		Route::get('/novo', 'ServiceController@create')->name('service_create');
		Route::post('/novo', 'ServiceController@store')->name('service_store');
		Route::get('/editar/{id}', 'ServiceController@edit')->name('service_edit');
		Route::post('/editar', 'ServiceController@update')->name('service_update');
		Route::get('/listar', 'ServiceController@index')->name('service_index');
		Route::get('/apagar/{id}', 'ServiceController@destroy')->name('service_destroy');
	});

	Route::group(['prefix' => 'funcionarios'], function(){
		Route::get('/novo', 'EmployeeController@create')->name('employee_create');
		Route::post('/novo', 'EmployeeController@store')->name('employee_store');
		Route::get('/editar/{id}', 'EmployeeController@edit')->name('employee_edit');
		Route::post('/editar', 'EmployeeController@update')->name('employee_update');
		Route::get('/listar', 'EmployeeController@index')->name('employee_index');
		Route::get('/apagar/{id}', 'EmployeeController@destroy')->name('employee_destroy');
	});
});

Auth::routes();
