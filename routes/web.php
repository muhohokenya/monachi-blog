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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/blogs', 'BlogsController@index')->name('blogs');
Route::post('/blogs/store', 'BlogsController@store')->name('blogs.store');
Route::get('/blogs/edit/{id}', 'BlogsController@edit')->name('blog.edit');
Route::post('/blogs/update/{id}', 'BlogsController@update')->name('blog.update');

Route::get('/students', 'StudentsControler@index')->name('students');
Route::post('/students/store', 'StudentsControler@store')->name('students.store');
Route::get('/students/edit/{id}', 'StudentsControler@edit')->name('students.edit');
Route::post('/students/update/{id}', 'StudentsControler@update')->name('student.update');
