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
    // return view('welcome');
    return redirect('index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/index', 'WelcomeController@index');
Route::get('/company', 'CompanyController@index');
Route::get('/product', 'ProductController@index');
Route::get('/contact', 'ContactController@index');
Route::get('/news', 'NewsController@index');

Route::get('/menu', function(){
    return view('menu');
});