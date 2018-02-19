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

Route::get('ft-introduction-fuokuka-trading-council', 'PagesController@get_ftc');
Route::get('ft-introduction-council-main-activities', 'PagesController@get_cma');
Route::get('ft-introduction-admission-guidance', 'PagesController@get_ag');

Route::get('trade-consulting-international-busines', 'PagesController@get_intl_business');
Route::get('trade-consulting-adviser-list', 'PagesController@get_adviser_list');

Route::get('seminar-info', 'PagesController@get_seminar_info');

Route::get('member-companies-member-introduction', 'PagesController@get_member_introduction');
Route::get('member-companies-commercial-operation', 'PagesController@get_commercial_operation');
Route::get('member-companies-manufacturing-and-processing', 'PagesController@get_manufacturing_processing');
Route::get('member-companies-bank-and-insurance', 'PagesController@get_bank_insurance');
Route::get('member-companies-transport-and-communications', 'PagesController@get_transport_communications');
Route::get('member-companies-all-interprises', 'PagesController@get_all_interprises');
Route::get('member-companies-special-members', 'PagesController@get_special_members');
Route::get('member-companies-alphabetical-order', 'PagesController@get_alphabetical_order');

Route::get('fuokuka-news', 'PagesController@get_fuokuka_news');

Route::get('en-fta', 'PagesController@get_en_ftc');
Route::get('en-about-us', 'PagesController@get_en_aboutus');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

