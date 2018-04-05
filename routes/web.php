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
//-------------------------------------------------------------------
Route::get('forgot-pass', 'PageController@forgotPassword');
Route::get('login',[
	'as' => 'Login',
	'uses' => 'PageController@getLogin',
]);
Route::get('register',[
	'as' => 'Register',
	'uses' => 'PageController@getRegister',
]);