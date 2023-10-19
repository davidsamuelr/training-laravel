<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/default','App\Http\Controllers\SiteController@index')->name('site.default');
Route::get('/contact', 'App\Http\Controllers\SiteController@contact')->name('site.contact');
Route::get('/about', 'App\Http\Controllers\SiteController@about')->name('site.about');
Route::get('/login', 'App\Http\Controllers\SiteController@login')->name('site.login');


