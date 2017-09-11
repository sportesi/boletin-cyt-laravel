<?php

use \Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home-2');
Route::get('/search', 'SearchController@index')->name('search');
Route::get('/category/{id}', 'CategoryController@index')->name('category');


/* UserRoutes */
Route::group(['prefix' => '/user'], function () {
    Route::group(['prefix' => '/news'], function () {
        Route::get('/', 'User\\NewsController@index')->name('user.news');
        Route::get('/create', 'User\\NewsController@create')->name('user.news.create');
        Route::post('/store', 'User\\NewsController@store')->name('user.news.store');
    });
});


/* BackofficeRoutes */

Route::group(['prefix' => '/backoffice', 'middleware' => ['role:admin']], function () {
    Route::get('/dashboard', 'Backoffice\\DashboardController@index')->name('backoffice.dashboard');
});