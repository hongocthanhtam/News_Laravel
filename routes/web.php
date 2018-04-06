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
// -----------------------------------------------------------------------
Route::get('trang-chu', 'PageController@index');

Route::get('chi-tiet', 'PageController@detail');

//-------------------------------------------------------------------
Route::get('forgot-pass', 'PageController@getForgotPassword');

Route::get('change-pass', 'PageController@getChangePassword');

//-------------------------------------------------------------------
Route::get('contact', 'PageController@getContact');

// login 
Route::get('login',[
	'as' => 'Login',
	'uses' => 'PageController@getLogin',
]);
// Register 
Route::get('register',[
	'as' => 'Register',
	'uses' => 'PageController@getRegister',
]);
