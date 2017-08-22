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

//link to dashboard/home
Route::get('/', 'HomeController@index')->name('dashboard');

//admin routes
Route::prefix('admin')->group(function () {
	//admin home page
	Route::get('/', function () {
		return view('admin.index');
	});
	//link to Roles Page
	Route::get('roles', 'RoleController@index')->name('roles');

	//link to Add Role Page
	Route::get('roles/add', 'RoleController@create')->name('roles.add');

	//action that stores role
	Route::post('store', 'RoleController@store')->name('role.store');

	//action that assign role
	Route::post('assign', 'RoleController@assign')->name('assign.role');
});
