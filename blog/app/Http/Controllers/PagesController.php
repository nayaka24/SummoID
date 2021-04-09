<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }
    public function about(){
        return view('about');
    }
    public function contact(){
        return view('contact');
    }
    public function hotel(){
        return view('hotel.home');
    }
    public function wisata(){
        return view('wisata.home');
    }
    public function news(){
        return view('berita.news');
    }
    public function cart(){
        return view('cart');
    }
    public function login(){
        return view('login');
    }
    public function register(){
        return view('register.user');
    }
    public function motor(){
        return view('motor.home');
    }
    
}
    
