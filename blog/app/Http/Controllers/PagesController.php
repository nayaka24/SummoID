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


    
    //motor
    public function bike(){
        return view('motor.home');
    }

    public function dashboard(){
        return view('dashboard.home');
    }
    
}
    
