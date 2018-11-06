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


Route::group(['middleware' => 'auth'], function() {
  
  Route::resource('/uwadmin', 'adminhomepage');
  Route::resource('/uwadminimport', 'importsController');
  Route::resource('/uwadminexport', 'ExportController');
  Route::resource('/uwadminsale', 'uwadminsales');
  Route::resource('/uwadminorder', 'OrderController');
  Route::resource('/uwadminuser', 'UserController' );
  Route::get('/search','importsController@result');
   
});


Auth::routes();


