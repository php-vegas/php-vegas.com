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

Route::get('/logout', function () {
    Auth::logout();

    return redirect('/login');
});

Route::get('/admin', 'Admin\AdminController@index')
    ->name('admin');
Route::get('/admin/flush-redis', 'Admin\RedisController@index')
    ->name('flush-redis');

Route::get('/admin/export-requests', 'Admin\TopicRequestsController@export')
    ->name('export-requests');

Route::get('/admin/past-talks', 'Admin\PastTalksController@index')
    ->name('add-past-talk');
Route::get('/admin/past-talks/delete/{id}', 'Admin\PastTalksController@delete')
    ->name('delete-past-talk');
Route::get('/admin/past-talks/edit/{id}', 'Admin\PastTalksController@edit')
    ->name('edit-past-talk');
Route::post('/admin/past-talks/insert', 'Admin\PastTalksController@insert')
    ->name('insert-past-talk');
Route::post('/admin/past-talks/update/{id}', 'Admin\PastTalksController@update')
    ->name('update-past-talk');

/**
 * Front Facing Routes
 */
Route::get('/', 'HomeController@index')
    ->name('home');
Route::get('/our-sponsors', 'SponsorsController@index')
    ->name('our-sponsors');
Route::get('/our-sponsors/sponsorship-information', 'SponsorshipInformationController@index')
    ->name('sponsor-info');
Route::get('/previous-talks','PreviousTalksController@index')
    ->name('prev-talks');
Route::get('/meetup-events', 'MeetupEventsController@index')
    ->name('meetup-events');
Route::get('/meetup-events/request-topic', 'TopicRequestsController@index')
    ->name('request-topic');
Route::get('/meetup-events/request-topic/thanks', 'TopicRequestsController@thanks')
    ->name('request-thanks');
Route::post('/meetup-events/request-topic/insert', 'TopicRequestsController@insert')
    ->name('insert-topic-request');
Route::get('/contact', 'ContactController@index')
    ->name('contact');
Route::get('/elephpant', 'ElephpantController@index')
    ->name('elephpant');