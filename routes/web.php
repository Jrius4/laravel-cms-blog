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


Route::get('/', 'BlogController@index')->name('blog');



Route::get('/blog.{post}', 'BlogController@show')->name('blog.show');



Route::get('/category.{category}', 'BlogController@category')->name('category');


Route::get('/author.{author}', 'BlogController@author')->name('author');


Auth::routes();

Route::get('/dashboard', 'Backend\DashboardController@index')->name('dashboard');

Auth::routes();

Route::get('/dashboard', 'Backend\DashboardController@index')->name('dashboard');

Auth::routes();

Route::get('/dashboard', 'Backend\DashboardController@index')->name('dashboard');

Route::resource('/backendblog', 'Backend\BackendBlogController');
