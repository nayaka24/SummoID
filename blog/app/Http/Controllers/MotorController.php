<?php

namespace App\Http\Controllers;
Use App\Motor;
Use App\About;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Motor = Motor::paginate(10);
        return view('dashboard.motor.home',compact('Motor'));
    }

    public function bike(){
        $Motor = Motor::paginate(10);
        $About = About::all();
        return view('motor.home',compact('Motor','About'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.motor.create');
        
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'nama'=>'required',
            'harga'=>'required',
            'kategori'=>'required',
            'deskripsi'=>'required',
            'gambar'=>'required'
        ]);
        
        $gmbr= $request->gambar;
        $namaFile = time().rand(100,999).".".$gmbr->getClientOriginalExtension();

        $Motor= Motor::create([
            'nama'=> $request->nama,
            'harga'=> $request->harga,
            'kategori'=> $request->kategori,
            'deskripsi'=> $request->deskripsi,
            'gambar'=> $namaFile
        ]);
        
        $gmbr->move(public_path().'/bike',$namaFile);
        return redirect('/motors')->with('success','Motor telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Motor= Motor::findorfail($id);
        $About = About::all();
        return view('motor.detail',compact('Motor','About'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Motor= Motor::findorfail($id);
        return view('dashboard.motor.edit',compact('Motor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nama'=>'required',
            'harga'=>'required',
            'kategori'=>'required',
            'deskripsi'=>'required'
        ]);

        $Motor= Motor::findorfail($id);
         
        if($request->has('gambar')){
             $gmbr= $request->gambar;
             $namaFile = time().rand(100,999).".".$gmbr->getClientOriginalExtension();
             $gmbr->move(public_path().'/bike',$namaFile);

             $motor_data= [
                'nama'=> $request->nama,
                'harga'=> $request->harga,
                'kategori'=> $request->kategori,
                'deskripsi'=> $request->deskripsi,
                'gambar'=> $namaFile
            ];
            
         }else{
            $motor_data= [
                'nama'=> $request->nama,
                'harga'=> $request->harga,
                'kategori'=> $request->kategori,
                'deskripsi'=> $request->deskripsi
            ];
         }
        $Motor->update($motor_data);
        
        return redirect('/motors')->with('success','Motor telah diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Motor= Motor::findorfail($id);
        $Motor->delete();

        return redirect('/motors')->with('success','Motor telah diHapus!(Silahkan Cek pada Daftar Hapus Motor)');
    }

    public function tampil_hapus()
    {
        $Motor= Motor::onlyTrashed()->paginate();
        return view('dashboard.motor.hapus',compact('Motor'));
    }
    
    public function restore($id)
    {
        $Motor= Motor::withTrashed()->where('id_motor',$id)->first();
        $Motor->restore();
        return redirect('/motors')->with('success','Berita telah direstore!(Silahkan cek pada Daftar Motor)');
    }
   
    public function kill($id)
    {
        $Motor= Motor::withTrashed()->where('id_motor',$id)->first();
        $Motor->forceDelete();
        return redirect('/motors')->with('success','Motor telah diHapus!');

    }
}
