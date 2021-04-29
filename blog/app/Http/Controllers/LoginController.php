<?php

namespace App\Http\Controllers;
use App\User;
use App\About;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){
        $About= About::all();
        return view('login',compact('About'));
    }
    
    public function postlogin(Request $request){
        
    }

    public function register(){
        $About= About::all();
        return view('register.user',compact('About'));
    }

    public function postregister(Request $request){
        
        $request->validate([
            'name'=>'required | max:255' ,
            'email'=>'required | email | max:255 | unique:users',
            'handphone'=>'required',
            'password'=>'required | min:8',
            'gambar'=>'required'
        ]);
        
        $level='pengguna';

        $gmbr= $request->gambar;
        $namaFile = time().rand(100,999).".".$gmbr->getClientOriginalExtension();

        $User= User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'handphone'=> $request->handphone,
            'password'=>bcrypt($request->password),
            'level'=>$level,
            'ktp'=> $namaFile
        ]);

        $gmbr->move(public_path().'/user',$namaFile);
        return redirect('/login')->with('success','Data Pengguna telah ditambahkan!');
        
    }
}
