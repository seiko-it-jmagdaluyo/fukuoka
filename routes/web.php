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

Route::get('/', 'PagesController@getIndex');
Route::get('members-page', 'PagesController@get_members_page');
Route::get('contact-us', 'PagesController@get_contact_us');

Route::get('fuokuka-trading-council', 'PagesController@get_ftc');
// Route::get('members-page', 'PagesController@get_members_page');
// Route::get('contact-us', 'PagesController@get_contact_us');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

