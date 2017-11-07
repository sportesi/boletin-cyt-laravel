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

Auth::routes();

/* Frontend Routes */

Route::get('/', 'Frontend\\HomeController@index')->name('home');
Route::get('/home', 'Frontend\\HomeController@index')->name('home-2');
Route::get('/search', 'Frontend\\SearchController@index')->name('search');
Route::get('/category/{id}', 'Frontend\\CategoryController@index')->name('category');
Route::resource('news', 'Frontend\\NewsController');
Route::resource('profile', 'Frontend\\ProfileController', [
    'only' => [
        'show',
        'edit',
        'update'
    ]
]);

/* BackofficeRoutes */

Route::group(['prefix' => '/backoffice', 'middleware' => ['role:admin']], function () {
    Route::get('/dashboard', 'Backoffice\\DashboardController@index')->name('bo.dash');
    Route::resource('user', 'Backoffice\\UserController', ['as' => 'backoffice']);
    Route::resource('category', 'Backoffice\\CategoryController', ['as' => 'backoffice']);
    Route::resource('course', 'Backoffice\\CourseController', [
        'as' => 'backoffice',
        'only' => ['index']
    ]);
});
