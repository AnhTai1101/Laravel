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
Route::group(['namespace' => 'Admin'], function () {
    Route::get('demo1', 'Demo1Controller@home');
});
Route::get('demo2', 'DemoController@home');
Route::get('pass', function () {
    echo bcrypt('123456');
});
Route::view('api/new', 'backend.edit');
