<?php

namespace App\Http\Controllers;
Use App\Motor;
Use App\News;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        
        $Motor=Motor::paginate(3);
        $News= News::paginate(3);
        return view('home', compact('Motor','News'));
    }
    public function contact(){
        return view('contact');
    }
    public function cart(){
        return view('cart');
    }

    public function dashboard(){
        return view('dashboard.home');
    }
    
}
    
