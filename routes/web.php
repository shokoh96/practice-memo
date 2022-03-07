<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Route::get('/home', 'PostController@index')->name('posts.index');
Route::get('/', 'PostController@index')->name('posts.index');
Route::get('/create', 'PostController@create')->name('posts.create');
Route::post('/', 'PostController@store')->name('posts.store');
Route::get('/{id}', 'PostController@show')->name('posts.show');
Route::get('/{id}/edit', 'PostController@edit')->name('posts.edit');
Route::put('/{id}', 'PostController@update')->name('posts.update');
Route::delete('/{id}', 'PostController@destroy')->name('posts.destroy');

Route::get('/comments/create/{post_id}', 'CommentController@create')->name('comments.create');