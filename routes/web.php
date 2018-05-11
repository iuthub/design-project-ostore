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

use App\User;

Route::get('/index', function () {
    return view('index');
});

Auth::routes();

Route::resource('minkblanket','MinkBlanketController');

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/log',function(){

    return view('auth.login');
});

Route::get('/reg', function () {
    return view('auth.register');
});
Route::resource('test','TestController');
Route::get('/admin','AdminController@index')->middleware('auth');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/users','AdminController@showUsers')->middleware('auth');
Route::get('/confirm','MailController@index')->middleware('auth');
Route::get('/editaccount','UserController@edit')->middleware('auth');
Route::post('/updateaccount','UserController@update')->middleware('auth');
Route::get('logout','UserController@logout')->middleware('auth');
Route::get('makeorder','UserController@makeorder')->middleware('auth');
Route::resource('prayermat','PrayerMatController');
Route::resource('flannel','FlannelController');
Route::resource('carpet','CarpetController');
Route::post('order','OrderController@order')->middleware('auth');
Route::post('basket/add','BasketController@add')->middleware('auth');
Route::get('basket/index','BasketController@index')->middleware('auth');
Route::post('basket/delete','BasketController@delete')->middleware('auth');
Route::get('basket/order','OrderController@orderFromBasket')->middleware('auth');





