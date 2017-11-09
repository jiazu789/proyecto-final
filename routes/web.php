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

Route::get('/',  [
	'uses'=>'HomeController@index',
	'as'=>'home'

	]);


route::resource('articles','ArticlesController');


Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('register', 'Auth\AuthController@getRegister');
Route::post('register', 'Auth\AuthController@postRegister');



// Password reset link request routes...
Route::get('password/email', 'Auth\PasswordController@getEmail');
Route::post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
Route::get('password/reset/{token}', 'Auth\PasswordController@getReset');
Route::post('password/reset', 'Auth\PasswordController@postReset');

Route::get('home', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);
Auth::routes();


Route::get('/home', 'HomeController@index')->name('home');

route::get('/notice','NoticeController@index');
route::get('/notice/create','NoticeController@create');

route::get('/notice/{id}', 'NoticeController@show');
Route::post('/notice', 'NoticeController@store');
route::get('/comentario/{id}', 'ComentarioController@show');
Route::post('/comentario', 'ComentarioController@store');








