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
  Route::resource('/permission', 'PermissiontrustController');
  Route::post('/detach', 'PermissiontrustController@detach');
  Route::resource('/addmore', 'tempoController');
  Route::post('/add', 'tempoController@install');
  Route::post('/addsale', 'tempoController@saleinput');
  Route::get('/sale', 'tempoController@sale');
  Route::resource('/report', 'ReportController');
  Route::post('/expreport', 'ReportController@export');
   Route::get('/salerep', 'ReportController@salereport');
  Route::post('/saleform', 'ReportController@saleput');
  Route::resource('/uwablock' , 'BlockController');
  Route::resource('/blockowner' , 'BlockOwnerController'); 
  
});
Route::resource('/hasharea', 'hashkeyController');
Route::post('/code', 'hashkeyController@code');



Auth::routes();


