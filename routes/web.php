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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

/*
*
*    POSTS CRUD
*
*/

Route::get('/criar-novo-post', 'PostController@create')->name('posts.create');

Route::get('/ver-todos-posts', 'PostController@index')->name('posts.index');

Route::get('/ver-post/{id}', 'PostController@show')->name('posts.show');

Route::get('/editar-post/{id}', 'PostController@edit')->name('posts.edit');

Route::put('/editar-post/{id}', 'PostController@update')->name('posts.update');

Route::post('/criar-novo-post', 'PostController@store')->name('posts.store');

Route::delete('/deletar-post/{id}', 'PostController@destroy')->name('posts.delete');





// Route::get('/posts', 'PostController@list')->name('posts.list');
