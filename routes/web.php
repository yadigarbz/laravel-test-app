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

Route::get('sag/{name?}', function ($name = null) {
   return view('saggiris', ['name' => $name] );
});

Route::get('sol/{name?}', function ($name = null) {
    return view('solgiris', ['name' => $name] );
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
