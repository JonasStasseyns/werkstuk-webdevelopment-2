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
Route::get('/', 'ContentController@getHome')->name('root');
Route::get('/about', 'ContentController@getAbout')->name('about');
Route::get('/privacy', 'ContentController@getPrivacyPolicy')->name('privacy');

Route::get('/contact', 'ContactController@getIndex')->name('contact');
Route::post('/contact', 'ContactController@sendMail')->name('contact.send');

Route::get('/blog', 'PostsController@getIndex')->name('blog.index');
Route::get('/blog/new', 'PostsController@getCreate')->name('blog.create');
Route::post('/blog/post', 'PostsController@postCreate')->name('blog.post');
Route::get('/blog/{id}', 'PostsController@getDetail')->name('blog.detail');
Route::get('/blog/delete/{id}/{from}', 'PostsController@getDelete')->name('blog.delete');

Route::get('/admin', 'AdminController@getIndex')->name('admin')->middleware('auth');
Route::get('/admin/posts', 'AdminController@getPostsIndex')->name('admin.posts')->middleware('auth');
Route::get('/admin/edit', 'AdminController@getEdit')->name('admin.edit')->middleware('auth');
Route::get('/admin/post-edit', 'AdminController@getPostEdit')->name('admin.post-edit')->middleware('auth');
Route::post('/admin/edit', 'AdminController@updateEdit')->name('admin.update')->middleware('auth');
Route::post('/admin/post-edit', 'AdminController@updatePostEdit')->name('admin.post-update')->middleware('auth');


Route::get('/donate', 'MollieController@getIndex')->name('donate.index');
Route::post('/donate', 'MollieController@preparePayment')->name('donate.prepare');

Route::name('webhooks.mollie')->post('/webhooks/mollie', 'MollieController@handle');
Route::get('/payment-success', 'MollieController@paymentSuccess')->name('payment.success');

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/testroute', function () {
    return view('test');
});
