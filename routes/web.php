<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'WelcomeController@staging')->name('welcome');



Auth::routes();


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/subscription', 'HomeController@selectsub')->name('select.subscription');
Route::get('/subscription/{package}', 'HomeController@processsub')->name('process.subscription');

Route::post('/pay', 'HomeController@redirectToGateway')->name('pay');

Route::get('/payment/callback/{id}', 'HomeController@handleGatewayCallback');

Route::get('/initiate-payment', 'HomeController@initiatepay')->name('initiate.payment');

Route::get('/cv-preview', 'HomeController@cvpreview')->name('cv.preview');

Route::post('/download-cv', 'HomeController@downloadcv')->name('download.cv');
