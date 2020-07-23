<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/', 'PageController@posts');
Route::get('blog/{slug}', 'PageController@post')->name('posts.single');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/category/{slug}', 'Web\PageController@category')->name('category');


Route::resource('posts', 'Backend\PostController')
    ->middleware('auth')
    ->except('show');

