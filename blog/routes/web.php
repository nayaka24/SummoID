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


//login
Route::get('/login','LoginController@login');
Route::get('/register','LoginController@register');

Route::get('/home','PagesController@home');
Route::get('/about','PagesController@about');
Route::get('/contact','PagesController@contact');
Route::get('/keranjang','PagesController@cart');

Route::get('/motor','PagesController@bike');

Route::resource('abouts', 'AboutController');

//admin
Route::get('/dashboard','PagesController@dashboard');
Route::resource('motors', 'MotorController');

Route::get('/wisatas/hapus','WisataController@tampil_hapus');
Route::get('/wisatas/{id_wisata}/restore','WisataController@restore');
Route::delete('/wisatas/{id_wisata}/kill','WisataController@kill');
Route::get('/paket_wisata','WisataController@wisata');
Route::resource('wisatas', 'WisataController');

Route::get('/beritas/hapus','NewsController@tampil_hapus');
Route::get('/beritas/{id_berita}/restore','NewsController@restore');
Route::delete('/beritas/{id_berita}/kill','NewsController@kill');
Route::get('/news','NewsController@news');
Route::resource('beritas', 'NewsController');

Route::get('/hotels/hapus','HotelController@tampil_hapus');
Route::get('/hotels/{id_hotel}/restore','HotelController@restore');
Route::delete('/hotels/{id_hotel}/kill','HotelController@kill');
Route::get('/booking_hotel','HotelController@hotel');
Route::resource('hotels', 'HotelController');

Route::get('/admin','UserController@admin');
Route::post('/admin','UserController@store');
Route::get('/admin/create','UserController@create');
Route::get('/mitra','UserController@mitra');
Route::get('/pengguna','UserController@pengguna');


