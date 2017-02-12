<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('pages.welcome');
});

Route::get('/','PagesController@index')->name('home');
Route::get('/about','PagesController@about')->name('about');
Route::get('/post','PagesController@singlepost')->name('post');
Route::get('/contact','PagesController@contact')->name('contact');
Route::auth();

Route::get('/admin', 'HomeController@index');
Route::get('/dashboard', 'HomeController@index');
Route::get('/social','AdminpagesController@index')->name('socials');