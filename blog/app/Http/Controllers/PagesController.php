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
    public function register(){
        return view('register.user');
    }
    
}
    
