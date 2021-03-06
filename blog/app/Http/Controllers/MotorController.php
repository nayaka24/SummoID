<?php

namespace App\Http\Controllers;
Use App\Motor;
Use Auth;
Use App\About;
use Illuminate\Http\Request;

class MotorController extends Controller
{
    
    public function __construct(){
        $this->middleware('auth')->except('bike','show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Motor = Motor::paginate(10);
        return view('mitra.motor.home',compact('Motor'));
    }

    public function bike(){
        $Motor = Motor::paginate(3);
        $About = About::all();
        return view('motor.home',compact('Motor','About'));
    }

    public function admin()
    {
        $Motor = Motor::paginate(10);
        return view('dashboard.motor.home',compact('Motor'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mitra.motor.create');
        
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
            'gambar'=>'required',
            'stnk'=>'required'
        ]);
        
        //gambar
        $gmbr= $request->gambar;
        $namaFile = time().rand(100,999).".".$gmbr->getClientOriginalExtension();

        //stnk
        $surat= $request->stnk;
        $File = time().rand(100,999).".".$surat->getClientOriginalExtension();

        $Motor= Motor::create([
            'nama'=> $request->nama,
            'harga'=> $request->harga,
            'kategori'=> $request->kategori,
            'deskripsi'=> $request->deskripsi,
            'gambar'=> $namaFile,
            'stnk'=> $File,
            'users_id'=> Auth::id()
        ]);
        
        $gmbr->move(public_path().'/bike',$namaFile);
        $surat->move(public_path().'/bike/stnk',$File);
        return redirect('/motors')->with('success','Kendaraan telah ditambahkan!');
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
        return view('mitra.motor.edit',compact('Motor'));
    }

    public function editadmin($id)
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
            
            if($request->has('stnk')){
            //gambar
             $gmbr= $request->gambar;
             $namaFile = time().rand(100,999).".".$gmbr->getClientOriginalExtension();
             $gmbr->move(public_path().'/bike',$namaFile);

             //stnk
             $surat= $request->stnk;
             $File = time().rand(100,999).".".$surat->getClientOriginalExtension();
             $surat->move(public_path().'/bike/stnk',$File);

             $motor_data= [
                'nama'=> $request->nama,
                'harga'=> $request->harga,
                'kategori'=> $request->kategori,
                'deskripsi'=> $request->deskripsi,
                'gambar'=> $namaFile,
                'stnk'=>$File,
                'verifikasi' =>'0'
            ];
            }else{
                //gambar
             $gmbr= $request->gambar;
             $namaFile = time().rand(100,999).".".$gmbr->getClientOriginalExtension();
             $gmbr->move(public_path().'/bike',$namaFile);

             $motor_data= [
                'nama'=> $request->nama,
                'harga'=> $request->harga,
                'kategori'=> $request->kategori,
                'deskripsi'=> $request->deskripsi,
                'gambar'=> $namaFile,
                'verifikasi' =>'0'
            ];

            }
         }else{
            if($request->has('stnk')){
             //stnk
             $surat= $request->stnk;
             $File = time().rand(100,999).".".$surat->getClientOriginalExtension();
             $surat->move(public_path().'/bike/stnk',$File);

             $motor_data= [
                'nama'=> $request->nama,
                'harga'=> $request->harga,
                'kategori'=> $request->kategori,
                'deskripsi'=> $request->deskripsi,
                'stnk'=>$File,
                'verifikasi' =>'0'
            ];
            }else{
             $motor_data= [
                'nama'=> $request->nama,
                'harga'=> $request->harga,
                'kategori'=> $request->kategori,
                'deskripsi'=> $request->deskripsi,
                'verifikasi' =>'0'
            ];

            }
         }
        $Motor->update($motor_data);
        
        return redirect('/motors')->with('success','Kendaraan Telah Diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    ///mitra
    public function destroy($id)
    {
        $Motor= Motor::findorfail($id);
        $Motor->delete();

        return redirect('/motors')->with('success','Kendaraan telah dihapus! (Silahkan Cek pada Kendaraan > Daftar Hapus Kendaraan)');
    }

    //admin
    public function destroyadmin($id)
    {
        $Motor= Motor::findorfail($id);
        $Motor->delete();

        return redirect('/motors-admin')->with('success','Kendaraan telah dihapus! (Silahkan Cek pada Kendaraan > Daftar Hapus Kendaraan)');
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
        return redirect('/motors-admin')->with('success','Kendaaraan telah direstore!');
    }
   
    public function kill($id)
    {
        $Motor= Motor::withTrashed()->where('id_motor',$id)->first();
        $Motor->forceDelete();
        return redirect('/motors-admin')->with('success','Kendaraan telah dihapus!');

    }

    public function verif(Request $request, $id)
    {
        $this->validate($request, [
            'nama'=>'required',
            'harga'=>'required',
            'kategori'=>'required',
            'deskripsi'=>'required',
            'verif'=>'required'
        ]);

        $Motor= Motor::findorfail($id);
         
            $motor_data= [
                'nama'=> $request->nama,
                'harga'=> $request->harga,
                'kategori'=> $request->kategori,
                'deskripsi'=> $request->deskripsi,
                'verifikasi' =>$request->verif
            ];

        $Motor->update($motor_data);
        
        return redirect('/motors-admin')->with('success','Kendaraan telah terverifikasi!');
    }
}
