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

Auth::routes();
    Route::group(['middleware'=> ['auth','isMitra']], function (){
        //admin
        Route::get('/dashboard-mitra','PagesController@mitra');
        Route::get('/profilAdmin','PagesController@admin');
        
        //data motor
        Route::post('/motors','MotorController@store');
        Route::get('/motors','MotorController@index');
        Route::get('/motors/create','MotorController@create');
        Route::patch('/motors/{motor}','MotorController@update');
        Route::delete('/motors/{motor}','MotorController@destroy');
        Route::get('/motors/{motor}/edit','MotorController@edit');
        
        //data wisata
        Route::post('/wisatas','WisataController@store');
        Route::get('/wisatas','WisataController@index');
        Route::get('/wisatas/create','WisataController@create');
        Route::patch('/wisatas/{wisata}','WisataController@update');
        Route::delete('/wisatas/{wisata}','WisataController@destroy');
        Route::get('/wisatas/{wisata}/edit','WisataController@edit');
        
        //data hotel
        Route::post('/hotels','HotelController@store');
        Route::get('/hotels','HotelController@index');
        Route::get('/hotels/create','HotelController@create');
        Route::patch('/hotels/{hotel}','HotelController@update');
        Route::delete('/hotels/{hotel}','HotelController@destroy');
        Route::get('/hotels/{hotel}/edit','HotelController@edit');
        
        //data transaksi
        Route::get('/confTransaksi','PagesController@transaksi');
    
    });
    
    Route::group(['middleware'=> ['auth','isAdmin']], function (){
        //admin
        Route::get('/dashboard','PagesController@dashboard');
        Route::get('/confKeranjang','PagesController@verifikasi');
        Route::get('/profilAdmin','PagesController@admin');
        
        //data motor
        Route::get('/motors/hapus','MotorController@tampil_hapus');
        Route::delete('/motors/{id_motor}/kill','MotorController@kill');
        Route::get('/motors/{id_motor}/restore','MotorController@restore');
        Route::get('/motors-admin','MotorController@admin');
        //Route::patch('/motors-admin/{motor}','MotorController@update');
        Route::delete('/motors-admin/{motor}','MotorController@destroyadmin');
        Route::get('/motors-admin/{motor}/edit','MotorController@editadmin');
        
        //data wisata
        Route::get('/wisatas/hapus','WisataController@tampil_hapus');
        Route::delete('/wisatas/{id_wisata}/kill','WisataController@kill');
        Route::get('/wisatas/{id_wisata}/restore','WisataController@restore');
        Route::get('/wisatas-admin','WisataController@admin');
        //Route::patch('/wisatas-admin/{wisata}','WisataController@update');
        Route::delete('/wisatas-admin/{wisata}','WisataController@destroyadmin');
        Route::get('/wisatas-admin/{wisata}/edit','WisataController@editadmin');
        
        //data hotel
        Route::get('/hotels/hapus','HotelController@tampil_hapus');
        Route::delete('/hotels/{id_hotel}/kill','HotelController@kill');
        Route::get('/hotels/{id_hotel}/restore','HotelController@restore');
        Route::get('/hotels-admin','HotelController@admin');
        //Route::patch('/hotels-admin/{hotel}','HotelController@update');
        Route::delete('/hotels-admin/{hotel}','HotelController@destroyadmin');
        Route::get('/hotels-admin/{hotel}/edit','HotelController@editadmin');
        
        
        //management user
        Route::get('/admin/hapus','UserController@tampil_hapus');
        Route::delete('/admin/{id_user}/kill','UserController@kill');
        Route::get('/admin/{id_user}/restore','UserController@restore');
        Route::post('/admin','UserController@store');
        Route::get('/admin','UserController@index');
        Route::get('/admin/create','UserController@create');
        Route::patch('/admin/{admin}','UserController@update');
        Route::delete('/admin/{admin}','UserController@destroy');
        Route::get('/admin/{admin}/edit','UserController@edit');
        
        //pengaturan
        Route::post('/about','AboutController@store');
        Route::get('/about','AboutController@index');
        Route::get('/about/create','AboutController@create');
        Route::patch('/about/{about}','AboutController@update');
        Route::delete('/about/{about}','AboutController@destroy');
        Route::get('/about/{about}/edit','AboutController@edit');
        
        Route::post('/gambar','ImageController@store');
        Route::get('/gambar','ImageController@index');
        Route::get('/gambar/create','ImageController@create');
        Route::patch('/gambar/{gambar}','ImageController@update');
        Route::delete('/gambar/{gambar}','ImageController@destroy');
        Route::get('/gambar/{gambar}/edit','ImageController@edit');
        
        //data transaksi
        Route::get('/confTransaksi','PagesController@transaksi');
        Route::get('/confPembayaran','PagesController@pembayaran');
        
    });

Route::group(['middleware'=> ['auth','isPengguna']], function (){
        Route::get('/keranjang','PagesController@cart');
        Route::get('/checkout','PagesController@checkout');
        Route::get('/profiluser','PagesController@user');
    });
    
    //register
Route::get('/mitra','MitraController@mitra');
Route::post('/mitra','MitraController@postmitra');
    
    //tampilan user
Route::get('/','PagesController@home');
Route::get('/tentang','PagesController@about');
Route::get('/motor','MotorController@bike');
Route::get('/motors/{motor}','MotorController@show');
Route::get('/paket_wisata','WisataController@wisata');
Route::get('/wisatas/{wisata}','WisataController@show');
Route::get('/booking_hotel','HotelController@hotel');
Route::get('/hotels/{hotel}','HotelController@show');
Route::get('/news','PagesController@news');


