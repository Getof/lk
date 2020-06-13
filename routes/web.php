<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/', 'Front\HomeController@index')->name('home');
Route::get('/blog', 'Front\BlogController@index');
Route::get('/post/{post}', 'Front\BlogController@show')->name('post.show');
Route::get('/reviews', 'Front\ReviewHomeController@getReview');
Route::get('/contacts', 'Front\MailController@index')->name('contacts.index');
Route::post('/send', 'Front\MailController@store')->name('contacts.store');


Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/slides', 'SlidesController', ['as'=>'admin']);
    Route::resource('/tasks', 'TasksController', ['as'=>'admin']);


});

Route::group(['prefix'=>'lk', 'namespace'=>'Lk'], function(){
   Route::get('/teacher', 'TeacherController@index')->name('teacher.index');
   Route::get('/teacher/chat', 'ChatController@index')->name('teacher.chat');
   Route::get('/teacher/chat/{id}', 'ChatController@getMessages')->name('teacher.messages');
   Route::post('/teacher/chat/message', 'ChatController@sendMessage')->name('mess.send');
    Route::get('/teacher/material', 'MaterialController@index')->name('teacher.material');


});

//Auth::routes();
Route::post('/reg', 'Front\HomeController@register')->name('auth.reg');
Route::post('/login', 'Front\HomeController@login')->name('auth.login');
Route::get('/logout', 'Front\HomeController@logout')->name('auth.logout');


//Route::get('/home', 'HomeController@index')->name('home');
