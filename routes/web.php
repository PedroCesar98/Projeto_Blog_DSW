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

Route::get('/BlogCasei',
	[
		'uses'=>'BlogController@inicio'
	]
);

Route::get('/AdminBlogCasei',
	[
		'uses'=>'BlogController@adminTela'
	]
);

Route::get('/create', 
	[
		'uses'=>'BlogController@create'
	]
);

Route::get('/delete/{id}', 
	[
		'uses'=>'BlogController@delete',
		'as'=>'delete.pergunta'
	]
);

Route::get('/update/{id}',
	[
		'uses'=>'BlogController@update',
		'as'=>'update.pergunta'
	]
);

Route::get('/login',
	[
		'uses'=>'BlogController@login',
		'as'=>'login'
	]
);

Route::get('/verificarLogin',
	[
		'uses'=>'BlogController@verificarLogin'
	]
);