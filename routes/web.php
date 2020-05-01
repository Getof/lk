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

Route::get('/', 'Front\HomeController@index');
Route::get('/blog', 'Front\BlogController@index');


Route::group(['prefix'=>'admin', 'namespace'=>'Admin'], function (){
    Route::get('/', 'DashboardController@dashboard')->name('admin.index');
    Route::resource('/slides', 'SlidesController', ['as'=>'admin']);
    Route::resource('/tasks', 'TasksController', ['as'=>'admin']);


});
