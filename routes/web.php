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

Route::get('/', 'frontController@home')->name('home');
Route::get('/about', 'frontController@about')->name('about');
Route::get( '/department', 'frontController@department')->name('department');
Route::get( '/doctor', 'frontController@doctor')->name( 'doctor');
Route::get('/contact', 'frontController@contact')->name( 'contact');
Route::get('/blog', 'frontController@blog')->name( 'blog');


