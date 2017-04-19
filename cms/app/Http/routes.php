<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
/**
*  Front   login processing
*/
Route::group(['namespace' => 'Frontend'], function () {

    Route::get('/', ['as' => 'front.home', 'uses' => 'HomeController@index']);
   

});
/**
*  Background login processing
*/
Route::group(['namespace' => 'Admin', 'prefix' => 'admin'],function(){

	Route::get('login',['as' => 'admin.login', 'uses' => 'Auth\AuthController@index']);
	Route::post('login/docheck',['as' => 'admin.login.docheck', 'uses' => 'Auth\AuthController@docheck']);
	Route::get('login/logout',['as' => 'admin.login.logout', 'uses' => 'Auth\AuthController@logout']);
	Route::get('locked',['as' => 'admin.locked', 'uses' => 'Auth\AuthController@dolocked']);

});
/**
*  Background module
**/
Route::group(['middleware' => 'auth.admin','namespace' => 'Admin', 'prefix' => 'admin'],function(){
  
	Route::get('/home', ['as' => 'admin.home', 'uses' => 'HomeController@index']);
	
	Route::resource('admin_user','AdminUserController');

	Route::resource('category','CategoryController');

	Route::get('/page/single',['as' => 'admin.page', 'uses' => 'PageController@index']);


	Route::controller('/systems/web','WebController');
	Route::resource('/systems/permission','PermissionController');

});

Route::get('/admin', function () {

    return redirect('admin/login');
});