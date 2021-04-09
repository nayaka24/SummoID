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
Route::get('/hotel','PagesController@hotel');
Route::get('/news','PagesController@news');
Route::get('/wisata','PagesController@wisata');
Route::get('/keranjang','PagesController@cart');
Route::get('/login','PagesController@login');
Route::get('/register','PagesController@register'); //register user
Route::get('/motor','PagesController@motor');

