<?php

namespace App\Http\Controllers;
use App\Wisata;
Use Auth;
use App\About;
use Illuminate\Http\Request;

class WisataController extends Controller
{
    public function __construct(){
        $this->middleware('auth')->except('wisata','show');
    }
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //mitra
    public function index()
    {
        $Wisata= Wisata::paginate(10);
        return view('mitra.wisata.home', compact('Wisata'));
    }

    //admin
    public function admin()
    {
        $Wisata= Wisata::paginate(10);
        return view('dashboard.wisata.home', compact('Wisata'));
    }

    //wisata
    public function wisata(){
        $Wisata= Wisata::paginate(10);
        $About= About::all();
        return view('wisata.home', compact('Wisata','About'));
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('mitra.wisata.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {           
        $this->validate($request,[
            'nama'=>'required',
            'harga'=>'required',
            'handphone'=>'required | max:16',
            'deskripsi'=>'required',
            'gambar'=>'required'
            ]);
            
            $gmbr= $request->gambar;
            $namaFile = time().rand(100,999).".".$gmbr->getClientOriginalExtension();
            
            $Wisata= Wisata::create([
                'nama'=> $request->nama,
                'harga'=> $request->harga,
                'handphone'=> $request->handphone,
                'deskripsi'=> $request->deskripsi,
                'gambar'=> $namaFile,
                'users_id'=> Auth::id()
                ]);
                
                $gmbr->move(public_path().'/wisata',$namaFile);
                return redirect('/wisatas')->with('success','Paket wisata telah ditambahkan!');
            }
            
     /**
     * Display the specified resource.
       *
             * @param  int  $id
             * @return \Illuminate\Http\Response
             */
    public function show($id)
    {
        $Wisata= Wisata::findorfail($id);
        $About= About::all();
        return view('wisata.detail',compact('Wisata','About'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //mitra
    public function edit($id)
    {
        $Wisata= Wisata::findorfail($id);
        return view('mitra.wisata.edit',compact('Wisata'));
    }

    //admin
    public function editadmin($id)
    {
        $Wisata= Wisata::findorfail($id);
        return view('dashboard.wisata.edit',compact('Wisata'));
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
        
        $this->validate($request,[
            'nama'=>'required',
            'harga'=>'required',
            'handphone'=>'required | max:16',
            'deskripsi'=>'required'
        ]);
        
        $Wisata= Wisata::findorfail($id);
         
        if($request->has('gambar')){
             $gmbr= $request->gambar;
             $namaFile = time().rand(100,999).".".$gmbr->getClientOriginalExtension();
             $gmbr->move(public_path().'/wisata',$namaFile);

             $wisata_data= [
                'nama'=> $request->nama,
                'harga'=> $request->harga,
                'handphone'=> $request->handphone,
                'deskripsi'=> $request->deskripsi,
                'gambar'=> $namaFile,
                'verifikasi' =>'0'
            ];
            
         }else{
            $wisata_data= [
                'nama'=> $request->nama,
                'harga'=> $request->harga,
                'handphone'=> $request->handphone,
                'deskripsi'=> $request->deskripsi,
                'verifikasi' =>'0'
            ];
         }
             
             $Wisata->update($wisata_data);
             return redirect('/wisatas')->with('success','Paket Wisata telah diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    //mitra
    public function destroy($id)
    {
        $Wisata= Wisata::findorfail($id);
        $Wisata->delete();

        return redirect('/wisatas')->with('success','Paket Wisata telah dihapus! (Silahkan Cek pada Paket Wisata > Daftar Hapus Paket Wisata)');
    }

    //admin
    public function destroyadmin($id)
    {
        $Wisata= Wisata::findorfail($id);
        $Wisata->delete();

        return redirect('/wisatas-admin')->with('success','Paket Wisata telah dihapus! (Silahkan Cek pada Paket Wisata > Daftar Hapus Paket Wisata)');
    }

    public function tampil_hapus()
    {
        $Wisata= Wisata::onlyTrashed()->paginate();
        return view('dashboard.wisata.hapus',compact('Wisata'));
    }
    
    public function restore($id)
    {
        $Wisata= Wisata::withTrashed()->where('id_wisata',$id)->first();
        $Wisata->restore();
        return redirect('/wisatas-admin')->with('success','Paket Wisata telah direstore!');
    }
   
    public function kill($id)
    {
        $Wisata= Wisata::withTrashed()->where('id_wisata',$id)->first();
        $Wisata->forceDelete();
        return redirect('/wisatas-admin')->with('success','Paket Wisata telah diHapus!');

    }

    public function verif(Request $request, $id)
    {
        $this->validate($request, [
            'nama'=>'required',
            'harga'=>'required',
            'handphone'=>'required | max:16',
            'deskripsi'=>'required',
            'verif'=>'required'
        ]);

        $Wisata= Wisata::findorfail($id);
         
            $wisata_data= [
                'nama'=> $request->nama,
                'harga'=> $request->harga,
                'handphone'=> $request->handphone,
                'deskripsi'=> $request->deskripsi,
                'verifikasi' =>$request->verif
            ];

        $Wisata->update($wisata_data);
        
        return redirect('/wisatas-admin')->with('success','Wisata telah terverifikasi!');
    }
}
