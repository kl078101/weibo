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

Route::get('/', 'StaticPagesController@home')->name('home');
Route::get('/help', 'StaticPagesController@help')->name('help');
Route::get('/about', 'StaticPagesController@about')->name('about');

Route::get('signup', 'UsersController@create')->name('signup'); //注册

Route::resource('users', 'UsersController'); //定义用户资源

Route::get('login', 'SessionsController@create')->name('login'); //登陆
Route::post('login', 'SessionsController@store')->name('login'); //提交
Route::delete('logout', 'SessionsController@destroy')->name('logout'); //退出

Route::resource('statuses', 'StatusesController', ['only' => ['store', 'destroy']]);

//关注页和粉丝列表页
Route::get('/users/{user}/followings', 'UsersController@followings')->name('users.followings');
Route::get('/users/{user}/followers', 'UsersController@followers')->name('users.followers');

//关注和取消按钮功能
Route::post('/users/followers/{user}', 'FollowersController@store')->name('followers.store');
Route::delete('/users/followers/{user}', 'FollowersController@destroy')->name('followers.destroy');
