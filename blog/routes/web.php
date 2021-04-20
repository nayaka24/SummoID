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


Route::get('/motor','PagesController@bike');
Route::get('/berita','PagesController@berita');
Route::get('/wisata','PagesController@wisata');
Route::get('/hotel','PagesController@hotel');

Route::resource('abouts', 'AboutController');

//login
Route::get('/login','LoginController@login');
Route::get('/register','LoginController@register'); //register user
//Route::get('/affiliate','PagesController@affiliate'); //register affiliate
//Route::get('/mitra','PagesController@mitra'); //register mitra



//admin
Route::get('/dashboard','PagesController@dashboard');
Route::resource('motors', 'MotorController');

Route::get('/wisatas/hapus','WisataController@tampil_hapus');
Route::get('/wisatas/{id_wisata}/restore','WisataController@restore');
Route::delete('/wisatas/{id_wisata}/kill','WisataController@kill');
Route::resource('wisatas', 'WisataController');

Route::get('/beritas/hapus','NewsController@tampil_hapus');
Route::get('/beritas/{id_berita}/restore','NewsController@restore');
Route::delete('/beritas/{id_berita}/kill','NewsController@kill');
Route::resource('beritas', 'NewsController');

Route::get('/hotels/hapus','HotelController@tampil_hapus');
Route::get('/hotels/{id_hotel}/restore','HotelController@restore');
Route::delete('/hotels/{id_hotel}/kill','HotelController@kill');
Route::resource('hotels', 'HotelController');

Route::get('/admin','UserController@admin');
Route::post('/admin','UserController@store');
Route::get('/admin/create','UserController@create');
Route::get('/mitra','UserController@mitra');
Route::get('/pengguna','UserController@pengguna');


