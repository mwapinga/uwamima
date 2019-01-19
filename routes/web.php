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


 Route::group(['middleware' => 'Isactive'], function() {


Route::group(['middleware' => 'Admin'], function() {


Route::group(['middleware' => 'MainAdmin'], function() {

  Route::group(['namespace' => 'admin'], function() {

      Route::resource('/permission', 'PermissiontrustController');

        Route::post('/detak',[
    'as' => 'permit.detach',
    'uses' => 'PermissiontrustController@detach'
   ]);

    Route::get('/det/{id}', 'PermissiontrustController@det');
    Route::resource('/calendar', 'CalendarController');


    //End USer managenet Route
    //
             //Block Route
  Route::resource('/uwablock' , 'BlockController');
  Route::resource('/blockowner' , 'BlockOwnerController');
  Route::resource('/payout' , 'Payoutcontroller');
      // Block Route

    //Product Route
  Route::group(['middleware' => 'Coder'], function() {
  Route::resource('/product','StockController');

  Route::post('/addsize',[
    'as' => 'product.size.add',
    'uses' => 'StockController@sizeinput'
   ]);
  
  Route::post('/addcats',[
    'as' => 'product.category.add',
    'uses' => 'StockController@typeinput'
   ]);

      Route::delete('delcats/{id}',array('uses' => 'StockController@typedel', 'as' => 'product.category.delete'));
      Route::delete('delsize/{id}',array('uses' => 'StockController@sizedel', 'as' => 'product.size.delete'));
    });



  });

      Route::group(['namespace' => 'fontside'], function() {

    // Font end CMS
    Route::resource('/slide', 'slidercontroller');
    Route::resource('/blog', 'blogscontroller');
    Route::resource('/event', 'EventsController');
    Route::resource('/testimonial', 'testimonialController');
    Route::resource('/portfolio', 'portfolioController');
    Route::resource('/staff', 'staffController');
    Route::resource('/ababout', 'adaboutController');
    //End Font End font end cms
            });
    });





Route::group(['namespace' => 'admin'], function() {

  Route::resource('/uwadmin', 'adminhomepage');

     //Transaction Route
  Route::resource('/uwadminimport', 'importsController');
  Route::resource('/uwadminexport', 'ExportController');
  Route::resource('/uwadminsale', 'uwadminsales');
  Route::resource('/uwadminorder', 'OrderController');
      // End Transaction Route

    //User Management Route
  Route::resource('/uwadminuser', 'UserController' );
  
    //End Product Route

   //TRansaction Tempo Route
   Route::resource('/addmore', 'tempoController');

   Route::post('/expo',[
    'as' => 'addmore.expo.install',
    'uses' => 'tempoController@install'
   ]);
     Route::post('/add',[
    'as' => 'addmore.sale.saleinput',
    'uses' => 'tempoController@saleinput'
   ]);
    Route::get('/sale', 'tempoController@sale');
     //End TRansaction Temp  Route




    //Transaction Report Route
  Route::resource('/report', 'ReportController');

   Route::post('/sale',[
    'as' => 'report.sale.saleput',
    'uses' => 'ReportController@saleput'
   ]);

    Route::post('/exp',[
    'as' => 'report.exp.export',
    'uses' => 'ReportController@export'
   ]);

  Route::get('/salerep', 'ReportController@salereport');

     //Transaction Report Route


      // 

           });     


         });
 
  Route::group(['namespace' => 'admin'], function() {

    Route::post('/profpic',['as' => 'profile.user.edit','uses' => 'subhomeController@photoupload']);
    Route::resource('/sub', 'subhomeController');
    Route::get('/import', 'subhomeController@import');
    Route::get('/profedit', 'subhomeController@profedit');
    Route::get('/export', 'subhomeController@export');
    Route::get('/sales','subhomeController@sales');
    Route::get('/order', 'subhomeController@order');
    Route::get('/block', 'subhomeController@block');
    Route::get('/profile', 'subhomeController@profile');
    //End block owner view
    // 
   });


      });

 Route::resource('/disactive', 'admin\Directcontroller');

});



Route::resource('/hasharea', 'hashkeyController');
Route::post('/code', 'hashkeyController@code');

Route::group(['namespace' => 'fontside'], function() {

    Route::resource('/', 'PagesController');
    // Route::resource('/apply', 'ApplicationController');
    // Route::resource('/contact', 'ContactController');
    // Route::resource('/About', 'AboutController');

});

Auth::routes();


