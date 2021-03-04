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

Route::get('/', 'ReviewController@index');
Route::post('/','ReviewController@store');
Route::get('/about', function () {
    return view('about');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/book', function () {
    return view('book');
});
Route::post('/book','bookController@store');
Route::post('/deletereview/{id}','HomeController@revDestroy');
Route::get('/order','HomeController@order');
Route::post('deleteorder/{id}','HomeController@destroy');
Route::get('/review','HomeController@review');

Auth::routes();

Route::get('/admin', 'HomeController@index')->name('admin.orders');
