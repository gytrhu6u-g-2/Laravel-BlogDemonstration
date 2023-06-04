<?php

use Illuminate\Support\Facades\Route;
use App\Models\Blogs;
use App\Http\Controllers\PostController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// ホーム画面
Route::get('/', 'App\Http\Controllers\BlogController@showHome')->name('home');
// データを登録
Route::post('/store', 'App\Http\Controllers\BlogController@exeStore')->name('store');
// 追加画面
Route::get('/add', 'App\Http\Controllers\BlogController@ShowAddBlog')->name('showAdd');

