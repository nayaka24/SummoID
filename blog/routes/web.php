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
Route::post('/login','LoginController@postregister');

Route::get('/mitra','MitraController@mitra');
Route::post('/mitra','MitraController@postmitra');

Route::get('/affiliate','AffiliateController@affiliate');
Route::post('/affiliate','AffiliateController@postaffiliate');

//tampilan user
Route::get('/home','PagesController@home');
Route::get('/contact','PagesController@contact');
Route::get('/tentang','PagesController@about');
Route::get('/keranjang','PagesController@cart');


//admin
Route::get('/dashboard','PagesController@dashboard');
Route::get('/confAffiliate','PagesController@confaffiliate');

//data motor
Route::get('/motors/hapus','MotorController@tampil_hapus');
Route::get('/motors/{id_motor}/restore','MotorController@restore');
Route::delete('/motors/{id_motor}/kill','MotorController@kill');
Route::get('/motor','MotorController@bike');
Route::resource('motors', 'MotorController');

//data wisata
Route::get('/wisatas/hapus','WisataController@tampil_hapus');
Route::get('/wisatas/{id_wisata}/restore','WisataController@restore');
Route::delete('/wisatas/{id_wisata}/kill','WisataController@kill');
Route::get('/paket_wisata','WisataController@wisata');
Route::resource('wisatas', 'WisataController');

//data news
Route::get('/beritas/hapus','NewsController@tampil_hapus');
Route::get('/beritas/{id_berita}/restore','NewsController@restore');
Route::delete('/beritas/{id_berita}/kill','NewsController@kill');
Route::get('/news','NewsController@news');
Route::resource('beritas', 'NewsController');

//data hotel
Route::get('/hotels/hapus','HotelController@tampil_hapus');
Route::get('/hotels/{id_hotel}/restore','HotelController@restore');
Route::delete('/hotels/{id_hotel}/kill','HotelController@kill');
Route::get('/booking_hotel','HotelController@hotel');
Route::resource('hotels', 'HotelController');

//management user
Route::resource('/admin','UserController');
Route::post('/admin','UserController@store');

//pengaturan
Route::resource('/about','AboutController');
Route::resource('/gambar','ImageController');



