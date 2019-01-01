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

Route::get('/', function () {
    return view('landing.landingPage');
});

Auth::routes();

Route::get('/dashboard', 'DashboardController@index');

Route::resource('places', 'PlacesController');
Route::resource('category', 'CategoriesController');
Route::resource('subcat', 'SubCategoriesController');
Route::post('changelocale', ['as' => 'changelocale', 'uses' => 'TranslationController@changeLocale']);