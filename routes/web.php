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

/*
Route::get('/', function () {
    return view('welcome');
});

route::get('/about', function(){
return view('pages.about');
});

route::get('/services', function(){
    return view('pages.services');
    });

route::get('/users/{id}/{name}', function($id,$name){
    return 'this is user ID : '.$id.' -- Name: '.$name;
});
*/
  
Route::get('/','PageContoller@index');
Route::get('/about','PageContoller@about');
Route::get('/services','PageContoller@services');
Route::get('/insert_product','PageContoller@insert_product');
Route::post('/store','PageContoller@store');
Route::get('/show','PageContoller@show');
Route::get('/form_product','PageContoller@index_F_P')->middleware('auth');
// Route::get('/form_product','PageContoller@search');
Route::resource('form', 'FormController');
// Route::resource('/create', 'FormController@index')->name('create');


Auth::routes();

Route::get('/dashboard', 'dashboardController@index');


