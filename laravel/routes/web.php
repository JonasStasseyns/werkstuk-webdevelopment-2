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
Route::get('/', 'ContentController@getHome')->name('home');
Route::get('/about', 'ContentController@getAbout')->name('about');
Route::get('/privacy', 'ContentController@getPrivacyPolicy')->name('privacy');

Route::get('/contact', 'ContactController@getIndex')->name('contact');

Route::get('/donate', 'MollieController@getIndex')->name('donate.index');
Route::post('/donate', 'MollieController@preparePayment')->name('donate.prepare');

Route::get('/payment-success', 'MollieController@paymentSuccess')->name('payment.success');
