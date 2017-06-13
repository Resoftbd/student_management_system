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


Route::get('/admin/notice', function () {
    return view('dashboard part-admin.send_notice');
});

Route::post('/notice/send','Notification@store');

Route::get('/admin_test', function () {
    return view('dashboard part-admin.project_students');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/yourProfile', 'HomeController@yourProfile')->name('yourProfile');
