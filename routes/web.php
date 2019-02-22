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

Route::group(['middleware' => 'MainAdmin'], function() {



  Route::group(['namespace' => 'admin'], function() {

 Route::resource('/uwadmin', 'adminhomepage');


    //User Management Route
  Route::resource('/uwadminuser', 'UserController' );

      Route::resource('/permission', 'PermissiontrustController');

        Route::post('/detak',[
    'as' => 'permit.detach',
    'uses' => 'PermissiontrustController@detach'
   ]);

    Route::get('/det/{id}', 'PermissiontrustController@det');
    Route::resource('/calendar', 'CalendarController');
      // Blo
      // 
      // product
      // 
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

 


      Route::group(['namespace' => 'fontside'], function() {

    // Font end CMS
    Route::resource('/slide', 'slidercontroller');
    Route::resource('/blog', 'blogscontroller');
    Route::resource('/event', 'EventsController');
    Route::resource('/testimonial', 'testimonialController');
    Route::resource('/portfolio', 'portfolioController');
    Route::resource('/staff', 'staffController');
    Route::resource('/ababout', 'adaboutController');
    Route::resource('/chairm','ChairControler'); 
    Route::resource('/rep','AdreportControler');
    Route::resource('/commentz','CommentsControler');
    



    //End Font End font end cms
            });

        });
     });
});

Route::resource('/hasharea', 'hashkeyController');
Route::post('/code', 'hashkeyController@code');

Route::group(['namespace' => 'fontside'], function() {

    Route::resource('/', 'PagesController');
    Route::resource('/contact', 'ContactController');
    Route::resource('/About', 'AboutController');
    Route::resource('/blg', 'BlogController');
    Route::resource('/reportz','ReportControler'); 
    Route::resource('/shop','ShopfrontControler'); 


});

Auth::routes();


