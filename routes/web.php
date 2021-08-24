<?php

use Illuminate\Support\Facades\Route;

Route::get('/','PagesController@index');
Route::get('/about-us','PagesController@about');

Route::resource('posts', 'PostController');
Route::get('/posts/delete/{id}','PostController@delete');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
