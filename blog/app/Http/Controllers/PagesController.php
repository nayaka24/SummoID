<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function contact(){
        return view('contact');
    }
    public function cart(){
        return view('cart');
    }
    public function login(){
        return view('login');
    }


    //wisata
    public function wisata(){
        return view('wisata.home');
    }
    //motor
    public function bike(){
        return view('motor.home');
    }
    //hotel
    public function hotel(){
        return view('hotel.home');
    }
    //berita
    public function berita(){
        return view('berita.news');
    }


    //login
    public function register(){
        return view('register.user');
    }
    public function affiliate(){
        return view('register.affiliate');
    }
    public function mitra(){
        return view('register.mitra');
    }
    public function dashboard(){
        return view('dashboard.home');
    }
    
}
    
