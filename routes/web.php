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
	//role routes
	Route::resource('role', 'RoleController');
	//role assign
	Route::get('role/assign', 'RoleController@assign')->name('role.assign');
	//word routes
	Route::resource('word', 'WordController');
	//category routes
	Route::resource('category', 'CategoryController');
});



