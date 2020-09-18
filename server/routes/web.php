<?php

use App\Http\Controllers\ShopController;
use App\Http\Controllers\UserController;
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

// ショップ一覧画面を表示
Route::get('shops', 'ShopController@index')->name('shops/index');
// ショップ登録画面表示
Route::get('/shops/create', 'ShopController@create')->name('shops/create');
// ショップ登録
Route::post('/shops/store', 'ShopController@store')->name('shops/store');
// ショップ詳細
Route::get('/shops/{id}', 'ShopController@show')->name('shops/show');
// ショップ編集画面の表示
Route::get('/shops/{id}/edit', 'ShopController@edit')->name('shops/edit');
// ショップの編集を完了
Route::post('/shops/update', 'ShopController@update')->name('shops/update');
// ショップの削除
Route::post('/shops/delete/{id}', 'ShopController@delete')->name('shops/delete');


Route::get('shops/list');
// ユーザー一覧画面を表示
Route::get('users', 'UserController@index')->name('users/index');
// ユーザー詳細画面を表示
Route::get('/users/{id}', 'UserController@show')->name('users/show');
// ユーザー編集画面の表示
Route::get('/users/{id}/edit', 'UserController@edit')->name('users/edit');
// ユーザーの更新
Route::post('/users/update', 'UserController@update')->name('users/update');

Route::post('/users/{id}/delete', 'UserController@delete');

Route::get('/users/mypage/{id}', 'UserController@mypage');


Route::get('/', 'HomeController@top')->name('top');

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
// make:authの挙動調べたのち、変更
// Route::get('/top', 'HomeController@top');
