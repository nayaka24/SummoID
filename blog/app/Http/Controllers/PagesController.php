<?php

namespace App\Http\Controllers;
Use App\Motor;
Use App\News;
Use App\About;
Use App\Image;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        
        $Motor=Motor::paginate(3);
        $News= News::paginate(3);
        $About= About::all();
        return view('home', compact('Motor','News','About'));
    }
    public function contact()
    {
        $About= About::all();
        return view('contact',compact('About'));
    }
    public function cart(){
        return view('cart');
    }
    
    public function about()
    {
        $About= About::all();
        $Image= Image::all();
        return view('about.home',compact('About','Image'));
    }

    public function dashboard(){
        return view('dashboard.home');
    }

    public function confaffiliate(){
        return view('dashboard.transaksi.confAffiliate');
    }


    
}
    
