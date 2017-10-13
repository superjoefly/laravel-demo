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

// // Welcome View
// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', 'PostController@index');


// Home View/ Dashboard
Route::get('/home', 'HomeController@index')->name('home');



// Routes for register, login etc
Auth::routes();



// Routes for posts
Route::resource('posts', 'PostController');



// Adminer
Route::any('adminer', '\Miroc\LaravelAdminer\AdminerAutologinController@index');