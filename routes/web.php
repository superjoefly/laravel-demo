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

// Welcome View
Route::get('/', function () {
    return view('welcome');
});
// Route::get('/', 'PostController@index');


// Home View/ Dashboard
Route::get('/home', 'HomeController@index')->name('home');



// Routes for register, login etc
Auth::routes();



// Routes Resource for posts
Route::resource('posts', 'PostController');



// Tags
Route::get('/posts/tags/{tag}', 'TagController@index');



// Comments
Route::post('/posts/{post}/comments', 'CommentController@store');



// Adminer
Route::any('adminer', '\Miroc\LaravelAdminer\AdminerAutologinController@index');
