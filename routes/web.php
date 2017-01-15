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

/**
 * Authenticated Routes
 */
Auth::routes();

/**
 * Front Facing Routes
 */
Route::get('/', 'HomeController@index')
    ->name('home');
Route::get('/our-sponsors', 'SponsorsController@index')
    ->name('our-sponsors');
Route::get('/out-sponsors/sponsorship-information', 'SponsorshipInformationController@index')
    ->name('sponsor-info');
Route::get('/previous-talks','PreviousTalksController@index')
    ->name('prev-talks');
Route::get('/meetup-events', 'MeetupEventsController@index')
    ->name('meetup-events');
Route::get('/meetup-events/request-topic', 'TopicRequestsController@index')
    ->name('request-topic');
Route::post('/meetup-events/request-topic/insert', 'TopicRequestsController@insert')
    ->name('insert-topic-request');
Route::get('/contact', 'ContactController@index')
    ->name('contact');