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

Route::get('/','PagesController@home');

Route::get('about','PagesController@about');

Route::get('plan','PagesController@plan');

Route::get('line-up','PagesController@lineUp');

Route::get('flow','PagesController@flow');

Route::get('contact','PagesController@contact');

Route::get('company','PagesController@company');

Route::get('customers','CustomersController@index');
