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
    return view('index');
});

Auth::routes();

Route::resource('bunch', 'BunchController');
Route::prefix('bunch/{bunch}')->group(function () {
    Route::resource('subscriber', 'SubscriberController', ['except' => [
        'index'
    ]]);
});
Route::resource('template', 'TemplateController');
Route::resource('campaign', 'CampaignController');
Route::post('/campaign/{campaign}/send', 'CampaignController@send')->name('campaign.send');
Route::get('/home', 'BunchController@index');