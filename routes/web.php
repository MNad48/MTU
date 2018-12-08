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
    return view('index');
});

Route::get('index',function() {
    return view('index');
});
Route::get('about-us',function() {
    return view('about-us');
});
Route::get('contact',function(){
    return view('contact');
});
Route::get('gallery',function (){
    return view('gallery');
});
Route::get('services',function (){
    return view('services');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
