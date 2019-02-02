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
Route::view('/','home.welcome');
Route::view('about','home.about');
Route::view('contact','home.contact');
Route::get('recaptcha/verify','HomeController@verify');
