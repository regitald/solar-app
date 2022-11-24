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
Route::get('/', 'App\Http\Controllers\AuthController@index');
Route::post('/login', 'App\Http\Controllers\AuthController@login');
Route::get('/logout', 'App\Http\Controllers\AuthController@logout');

//general
Route::get('/notification', 'App\Http\Controllers\GeneralController@notif');
Route::get('/chat', 'App\Http\Controllers\GeneralController@chat');

//module follow up
Route::get('/follow-up', 'App\Http\Controllers\FollowUpController@index');
Route::get('/follow-up/form', 'App\Http\Controllers\FollowUpController@form');
Route::post('/follow-up/form', 'App\Http\Controllers\FollowUpController@store');
Route::get('/follow-up/form/{id}', 'App\Http\Controllers\FollowUpController@more');
Route::post('/follow-up/form/{id}', 'App\Http\Controllers\FollowUpController@storeMore');
Route::get('/follow-up/order', 'App\Http\Controllers\FollowUpController@order');
Route::get('/follow-up/database/{status}', 'App\Http\Controllers\FollowUpController@database');
Route::get('/follow-up/re-order/{id}', 'App\Http\Controllers\FollowUpController@reOrder');
Route::get('/follow-up/status/{status}/{id}', 'App\Http\Controllers\FollowUpController@status');
