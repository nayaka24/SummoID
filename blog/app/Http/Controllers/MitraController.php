<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use App\About;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;

class MitraController extends Controller
{
    use RegistersUsers;

    public function __construct()
    {
        $this->middleware('guest');
    }
    
    public function mitra(){
        $About= About::all();
        return view('register.mitra',compact('About'));
    }

    public function postmitra(Request $request){
        
        $request->validate([
            'name'=>'required | max:255' ,
            'email'=>'required | email | max:255 | unique:users',
            'handphone'=>'required',
            'password'=>'required | min:8'
        ]);
        
        $level='mitra';

        $User= User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'handphone'=> $request->handphone,
            'password'=>bcrypt($request->password),
            'level'=>$level,
        ]);

        return redirect('/login')->with('success','Mitra telah diregister! Silahkan verifikasi email anda.');
        
    }
}
