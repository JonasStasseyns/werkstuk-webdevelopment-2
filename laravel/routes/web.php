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

Route::get('/blog', 'PostsController@getIndex')->name('blog.index');
Route::get('/testpost', function () {
    return view('admin.testpost');
});
Route::post('/blog/post', 'PostsController@postCreate')->name('blog.post');

Route::get('/admin', 'AdminController@getIndex')->name('admin');
Route::get('/admin/posts', 'AdminController@getPostsIndex')->name('admin.posts');
Route::get('/admin/edit', 'AdminController@getEdit')->name('admin.edit');
Route::get('/admin/post-edit', 'AdminController@getPostEdit')->name('admin.post-edit');
Route::post('/admin/edit', 'AdminController@updateEdit')->name('admin.update');
Route::post('/admin/post-edit', 'AdminController@updatePostEdit')->name('admin.post-update');


Route::get('/donate', 'MollieController@getIndex')->name('donate.index');
Route::post('/donate', 'MollieController@preparePayment')->name('donate.prepare');

Route::name('webhooks.mollie')->post('/webhooks/mollie', 'MollieController@handle');
Route::get('/payment-success', 'MollieController@paymentSuccess')->name('payment.success');
