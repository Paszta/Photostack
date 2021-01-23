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

Route::get('/', function () {
    return view('landingpage');
}) -> name('landingpage');

Route::get('/info', function () {
    return view('info');
}) -> name('info');

Route::get('/gallery', function () {
    return view('gallery');
}) -> name('gallery');

Route::get('/contact', function () {
    return view('contact');
}) -> name('contact');

//Route::get('/shop', function () {
//    return view('shop');
//}) -> name('shop');


Route::get('/shop','App\Http\Controllers\OrdersController@create')->name('shop');
Route::post('/shop','App\Http\Controllers\OrdersController@store')->name('store');

Auth::routes();


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('auth');
Route::get('/home', 'App\Http\Controllers\OrdersController@index')->name('home')->middleware('auth');
Route::put('/home','App\Http\Controllers\UserController@update')->name('update')->middleware('auth');
Route::patch('/home/{id}', 'App\Http\Controllers\OrdersController@update')->name('cancel')->middleware('auth');
Route::delete('/home/{id}','App\Http\Controllers\UserController@destroy')->name('remove')->middleware('auth');
