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

Route::get('/', 'MainController@index')->name('main.index');
// Route::get('/{id}', 'MainController@show')->name('main.show');
Route::get('/about', 'MainController@about')->name('about');
Route::get('/contact', 'MainController@contact')->name('contact');

//Register Controller
Route::get('/user/register', 'RegisterController@create')->name('registerIndex');
Route::post('/user/register', 'RegisterController@store')->name('register.store');

//Login Controller
Route::get('/user/login', 'LoginController@create')->name('loginIndex');
Route::post('/user/login', 'LoginController@store')->name('login.store');
Route::post('/logout', 'LoginController@destroy')->name('logout');

//Posts Controller
Route::get('/posts/{id}', 'PostController@index')->name('posts.show');
Route::post('/posts', 'PostController@store')->name('posts.store');

//Comments Controller
Route::post('/comments', 'CommentController@store')->name('comment.store');
Route::post('/reply', 'CommentController@reply')->name('comment.reply');
Route::get('/reply/{id}', 'CommentController@replyShow')->name('reply.show');


Auth::routes();




Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
