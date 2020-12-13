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



Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {
    Route::get('tweet/timeline', 'Admin\TweetController@index');
    Route::post('tweet/timeline', 'Admin\TweetController@create');
    Route::get('tweet/delete/{id}', 'Admin\TweetController@delete');
});

// http://xxxxxx.jp/todo/create というURL にアクセスが来たら、TodoControllerのadd アクションに渡すという処理をこの一行で書いています。