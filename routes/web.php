<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

/*Route::get('/category', function () {
    return view('Home/category');
});

Route::get('/book', function () {
    return view('Home/book');
});*/
Route::get('category', 'App\Http\Controllers\CategoryController@index');
Route::get('book', 'App\Http\Controllers\BookController@index');
Route::post('category/store', 'App\Http\Controllers\CategoryController@store')->name('b_test');
Route::post('book/store', 'App\Http\Controllers\BookController@store')->name('test');