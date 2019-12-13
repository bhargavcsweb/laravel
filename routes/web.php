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


Route::get('/hello' , 'PageController@index');
Route::get('/service' , 'servicesControllerphp@index');
Route::post('/service' , 'servicesControllerphp@store');
Route::get('/add-service' , 'servicesControllerphp@add_service');



Route::get('/customers' , 'CustomerController@index');
Route::get('/customers/create' , 'CustomerController@create');

Route::post('/customers/create' , 'CustomerController@store');