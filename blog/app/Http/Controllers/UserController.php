<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //admin
    public function index()
    {
        $User= User::paginate(10);
        return view('dashboard.pengguna.admin',compact('User'));
    }

    public function create()
    {
        return view('dashboard.pengguna.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required | max:255' ,
            'email'=>'required | email | max:255 | unique:users',
            'handphone'=>'required | max: 16',
            'password'=>'required | min:8',
            'gambar'=>'required'
        ]);
        
        $level='Admin';
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
        return redirect('/admin')->with('success','Admin telah ditambahkan!');

    }
    public function edit($id)
    {
        $User= User::findorfail($id);
        return view('dashboard.pengguna.edit',compact('User'));
    }
    

}
