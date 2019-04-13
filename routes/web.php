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

Route::get('/', 'Main_pageController@index')->name('main_page');

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    Route::get('/admin', 'AdminController@dashboard')->name('get.admin');
    Route::post('/admin', 'AdminController@index')->name('admin');
    Route::get('/blog', 'BlogController@create')->name('blog');
});

Route::group(['middleware' => 'users'], function () {
    Route::get('/contacts', 'ContactsController@index')->name('contacts');
    Route::post('/comments', 'ContactsController@store')->name('comments');
});

Route::get('/blog', 'BlogController@blog')->name('blog');
Route::post('/store', 'BlogController@store')->name('store');
Route::get('/food_at_diseases/{slug}', 'Food_at_diseasesController@food_at_diseases')->name('index.food_at_diseases');
Route::get('/nutrients/{slug}', 'NutrientsController@nutrients')->name('index.nutrients');
Route::get('/pages/contacts', 'ContactsController@index')->name('index.contacts');
Route::post('/pages/search-page', 'SearchController@search')->name('search');


