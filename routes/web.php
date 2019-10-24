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

/*Route::get('/', function () {
    $nama = 'Welcome';
    return view('login', ['nama' => $nama]);
});

Route::get('/page-signup', function () {
    return view('page-signup');
});*/

Route::get('/', 'LoginController@home');
Route::get('/page-signup', 'LoginController@pagesignup');
Route::post('/login', 'LoginController@login');
Route::get('/dashboard', 'HomeController@home');
Route::get('/logout', 'LoginController@logout');
