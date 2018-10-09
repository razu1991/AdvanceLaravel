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

use App\Jobs\SendEmailJob;
use App\Mail\SendEmailMailable;
use Carbon\Carbon;
use App\Events\TaskEvent;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/locale/{lang?}', function($lang = null) {
    App::setLocale($lang);
    return view('language');
});

//Route::get('form','FormController@index')->name('form');
//Route::post('form','FormController@store');

Route::get('home', 'HomeController@index');
Route::get('form', 'HomeController@form');
Route::post('form', 'HomeController@store');
Route::get('search/{searchkey}', 'HomeController@search');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/sendEmail', function() {
    $job = (new SendEmailJob())->delay(Carbon::now()->addSeconds(5));
    dispatch($job);
    return "email is send properly";
});

Route::get('event', function() {
    event(new TaskEvent('Hey'));
});
Route::get('listen', function() {
    return view('listenBroadcast');
});
Route::get('test','HomeController@testPush');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
