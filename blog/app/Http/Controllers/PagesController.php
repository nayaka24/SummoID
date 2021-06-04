<?php

namespace App\Http\Controllers;
Use App\Motor;
Use App\About;
Use App\Image;
use App\User;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        
        $Motor=Motor::latest()->limit(3)->get();
        $About= About::all();
        return view('beranda', compact('Motor','About'));
    }
    public function cart(){
        $About= About::all();
        return view('cart',compact('About'));
    }

    public function news(){
        $About = About::all();
        return view('berita.news',compact('About'));
    }
    
    public function about()
    {
        $About= About::all();
        $about= About::all();
        $Image= Image::all();
        return view('about.home',compact('About','Image','about'));
    }

    //dashboard admin
    public function dashboard(){
        return view('dashboard.home');
    }

    //dashboard mitra
    public function mitra(){
        return view('mitra.home');
    }

    public function admin(){
        return view('dashboard.profil');
    }

    public function user(){
        return view('profiluser');
    }

    public function transaksi(){
        return view('dashboard.transaksi.confTransaksi');
    }

    public function verifikasi(){
        return view('dashboard.transaksi.confKeranjang');
    }

}
    
