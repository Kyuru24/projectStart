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



// Route::get('/hello', function () {
    //return view('welcome');
    // return 'Hello World';
// });

/*Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
*/

/*Route::get('/', function () {
    return view('welcome');
    //return 'Hello World';
});*/

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/profile', 'PagesController@profile');

Route::get('/dashboard', 'PagesController@dashboard');

Route::get('/register', 'PagesController@register');

Route::get('/header', 'PagesController@header');

Route::resource('posts', 'PostsController');

