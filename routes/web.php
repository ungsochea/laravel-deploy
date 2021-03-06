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
    return view('frontend.layouts.master');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/welcome',function(){
    return 'hello';
});
Route::get('/hello',function(){
    return 'ok you win';
});

