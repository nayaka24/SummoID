<?php

namespace App\Http\Controllers;
Use App\Motor;
Use App\News;
Use App\About;
Use App\Image;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        
        $Motor=Motor::paginate(3);
        $News= News::paginate(3);
        $About= About::all();
        return view('beranda', compact('Motor','News','About'));
    }
    public function contact()
    {
        $About= About::all();
        $about= About::all();
        return view('contact',compact('About','about'));
    }
    public function cart(){
        $About= About::all();
        return view('cart',compact('About'));
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

    public function admin(){
        return view('dashboard.profil');
    }

    public function user(){
        return view('profiluser');
    }

}
    
