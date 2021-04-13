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

Route::get('/home','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/keranjang','PagesController@cart');
Route::get('/login','PagesController@login');
Route::get('/register','PagesController@register'); //register user
Route::get('/affiliate','PagesController@affiliate'); //register affiliate
Route::get('/mitra','PagesController@mitra'); //register mitra


Route::resource('motors', 'MotorController');
Route::resource('wisatas', 'WisataController');
Route::resource('news', 'NewsController');
Route::resource('hotels', 'HotelController');
Route::resource('abouts', 'AboutController');

