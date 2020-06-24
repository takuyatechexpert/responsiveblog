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
Route::get('/', 'TopPageController@index')->name('topPage.index');

Route::get('show/{id}','PostController@show')->name('post.show');

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

/*
|--------------------------------------------------------------------------
| 1) User 認証不要
|--------------------------------------------------------------------------
*/
// Route::get('/home', function () { return redirect('/home'); });
// /にアクセスした時に/homeにredirectの設定になっていたので
// 設定したroot pageに飛ぶ/homenに飛ばされていた
// '/' → '/home'に変更して回避したが動きとしては微妙
// 不要であれば削除で良い
 
/*
|--------------------------------------------------------------------------
| 2) User ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['middleware' => 'auth:user'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
});
 
/*
|--------------------------------------------------------------------------
| 3) Admin 認証不要
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin'], function() {
    Route::get('/',         function () { return redirect('/admin/home'); });
    Route::get('login',     'Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login',    'Admin\LoginController@login');
});
 
/*
|--------------------------------------------------------------------------
| 4) Admin ログイン後
|--------------------------------------------------------------------------
*/
Route::group(['prefix' => 'admin', 'middleware' => 'auth:admin'], function() {
    Route::post('logout',   'Admin\LoginController@logout')->name('admin.logout');
    Route::get('home',      'Admin\HomeController@index')->name('admin.home');
    // 新規管理ユーザー登録処理
    Route::get('register', 'Admin\RegisterController@showRegistrationForm')->name('register');
    Route::post('register', 'Admin\RegisterController@register');
});

// 新規投稿の為のルーティング
Route::group(['prefix' => 'post', 'middleware' => 'auth:admin'], function() {
    // railsではcreate
    Route::post('store','PostController@store')->name('post.store');
    Route::get('index', 'PostController@index')->name('post.index');
    Route::get('edit/{id}', 'PostController@edit')->name('post.edit');
    Route::post('update/{id}', 'PostController@update')->name('post.update');
});

// NEWS追加の為のルーティング
Route::group(['prefix' => 'news', 'middleware' => 'auth:admin'], function() {
    Route::get('index', 'NewsController@index')->name('news.index');
    Route::get('create','NewsController@create')->name('news.create');
    Route::post('store', 'NewsController@store')->name('news.store');
    // railsではcreate
    Route::get('edit/{id}', 'NewsController@edit')->name('news.edit');
    Route::post('update/{id}', 'NewsController@update')->name('news.update');
    Route::post('destroy/{id}', 'NewsController@destroy')->name('news.destroy');
});

// ジャンル追加のルーティング
Route::group(['prefix' => 'genre', 'middleware' => 'auth:admin'], function() {
    Route::get('create','GenreController@create')->name('genre.create');
    
});