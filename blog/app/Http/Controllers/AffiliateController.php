<?php

namespace App\Http\Controllers;
use App\About;
use App\User;
use Illuminate\Http\Request;

class AffiliateController extends Controller
{
    public function affiliate(){
        $About= About::all();
        return view('register.affiliate',compact('About'));
    }

    public function postaffiliate(Request $request){
        
        $request->validate([
            'name'=>'required | max:255' ,
            'email'=>'required | email | max:255 | unique:users',
            'handphone'=>'required ',
            'password'=>'required | min:8',
            'gambar'=>'required'
        ]);
        
        $level='affiliate';

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
        return redirect('/login')->with('success','Data Affiliate telah ditambahkan! Silahkan Login');
        
    }
}
