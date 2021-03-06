<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
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
        ]);
        
        $level='Admin';

        $User= User::create([
            'name'=> $request->name,
            'email'=> $request->email,
            'handphone'=> $request->handphone,
            'password'=>bcrypt($request->password),
            'level'=>$level,
        ]);

        return redirect('/admin')->with('success','Admin telah ditambahkan!');

    }
    public function edit($id)
    {
        $User= User::findorfail($id);
        return view('dashboard.pengguna.edit',compact('User'));
    }
    
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'=>'required | max:255' ,
            'email'=>'required | email | max:255',
            'handphone'=>'required | max: 16',
            'level'=>'required'
        ]);

        $User= User::findorfail($id);
         
        if ($request->input('password')){
                $user_data= [
                    'name'=> $request->name,
                    'email'=> $request->email,
                    'handphone'=> $request->handphone,
                    'password'=>bcrypt($request->password),
                    'level'=>$request->level
                ];
        }else{
                $user_data= [
                    'name'=> $request->name,
                    'email'=> $request->email,
                    'handphone'=> $request->handphone,
                    'level'=>$request->level
                ];
        }
        $User->update($user_data);
        
        return redirect('/admin')->with('success','Pengguna telah diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $User= User::findorfail($id);
        $User->delete();

        return redirect('/admin')->with('success','Pengguna telah diHapus! (Silahkan cek pada Pengguna > Daftar Hapus Pengguna)');
    }

    public function tampil_hapus()
    {
        $User= User::onlyTrashed()->paginate();
        return view('dashboard.pengguna.hapus',compact('User'));
    }

    public function restore($id)
    {
        $User= User::withTrashed()->where('id_user',$id)->first();
        $User->restore();
        return redirect('/admin')->with('success','Pengguna telah direstore!');
    }

    public function kill($id)
    {
        $User= User::withTrashed()->where('id_user',$id)->first();
        $User->forceDelete();
        return redirect('/admin')->with('success','Pengguna telah diHapus!');

    }
}
