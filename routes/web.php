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

Route::get('/home', 'HomeController@index');

Route::resource('/student', 'StudentController');
Route::resource('/level', 'LevelController');
Route::resource('/schoolyear', 'SchoolyearController');

Route::name('student.filter')->get('/filter/student', 'StudentController@filter');
