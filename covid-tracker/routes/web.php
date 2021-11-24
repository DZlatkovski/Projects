<?php

use Illuminate\Support\Facades\Route;

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

Route::post('/sync', "GlobalController@sync")->name('sync-all-data');

Route::get('/', "HomeController@index")->name('home');
Route::post('/', "DataController@getGlobalData")->name('sync');
Route::post('/country-data', "DataController@getCountryData")->name('country-data');
Route::post('/back-to-global', "HomeController@backToGlobal")->name('back-to-global');




