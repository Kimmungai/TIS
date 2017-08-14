<?php

use App\Events\MessagePosted;
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

Route::get('customers/{customer}','CustomersController@show');

Route::get('chat', function(){
  return view('chat.index');
})->middleware('auth');

Route::get('/messages', function () {
    return App\Message::with('user')->get();
})->middleware('auth');
Route::post('/messages', function () {
    // Store the new message
    $user = Auth::user();
    $message = $user->messages()->create([
        'message' => request()->get('message')
    ]);
    // Announce that a new message has been posted
    broadcast(new MessagePosted($message, $user))->toOthers();
    return ['status' => 'OK'];
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
