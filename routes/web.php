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

Auth::routes();
Route::get('/', 'HomeController@index')->name('home');
Route::POST('/enviar', 'HomeController@enviar')->name('enviar');
Route::get('/posts','HomeController@getPosts');
route::POST('/materia','HomeController@materia');
route::post('/materia/update','HomeController@materiaUpdate');
route::post('/delete','HomeController@delet');