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

// AUTH
Auth::routes();

// POST
Route::get('/posts/{post}', 'PostController@single');

// HOME
Route::get('/home', 'HomeController@index')->name('home');

// INDEX
Route::get('/', 'PostController@all');

// ADMIN
Route::get('/admin/{any}', 'AdminController@index')->where('any', '.*');

// COMMENT
Route::get('/{post}/comments', 'CommentController@index');
Route::post('/{post}/comments', 'CommentController@store');
