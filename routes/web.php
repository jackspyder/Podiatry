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
    return view('welcome');
});

Route::get('/conditions', 'ConditionsController@index');
Route::get('/conditions/{slug}/', 'ConditionsController@show');

Route::get('/services', 'ServicesController@index'); //s
Route::get('/services/{slug}/', 'ServicesController@show');

Route::get('/book', 'BookingsController@index'); //book

Route::get('/contact', 'ContactController@index'); //contact
Route::get('/contact/public', 'ContactController@public');
Route::post('/contact/public',  'ContactController@mailToAdmin');

Route::get('/contact/referral', 'ContactController@referral');
Route::post('/contact/referral', 'ContactController@referToAdmin');

Route::get('/blog', 'PostsController@index');
Route::get('/blog/{slug}/', 'PostsController@show');


Route::get('/about', 'HomeController@about');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
