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

Route::get('/', 'HomePageController@index');

Route::get('/admin/notice', function () {
    return view('dashboard part-admin.send_notice');
});
Route::get('/admin/link','LinkController@index');

Route::post('/notice/send','Notification@store');

Route::post('/links/update','LinkController@store');

Route::get('/admin_test', function () {
    return view('dashboard part-admin.project_students');
});


Route::get('/admin/home','HomeInfoController@index');

Route::post('/admin/home','HomeInfoController@store');

Route::get('/admin/profile','AdminProfileController@index');

Route::post('/admin/profile','AdminProfileController@store');

Route::post('/admin/sliders','SliderController@store');

Route::get('/admin/sliders','SliderController@index');

Route::delete('/admin/sliders/{sliders}', 'SliderController@delete');


