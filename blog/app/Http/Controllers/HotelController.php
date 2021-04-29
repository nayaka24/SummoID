<?php

namespace App\Http\Controllers;
use App\Hotel;
use App\About;
use Illuminate\Http\Request;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Hotel= Hotel::paginate(10);
        return view('dashboard.hotel.home',compact('Hotel'));
    }

    public function hotel()
    {
        $Hotel= Hotel::paginate(10);
        $About = About::all();
        return view('hotel.home',compact('Hotel','About'));
    }

    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hotel.create');
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
            'deskripsi'=>'required',
            'gambar'=>'required'
        ]);
        
        $gmbr= $request->gambar;
        $namaFile = time().rand(100,999).".".$gmbr->getClientOriginalExtension();

        $Hotel= Hotel::create([
            'nama'=> $request->nama,
            'deskripsi'=> $request->deskripsi,
            'harga'=> $request->harga,
            'gambar'=> $namaFile
        ]);
        
        $gmbr->move(public_path().'/hotel',$namaFile);
        return redirect('/hotels')->with('success','Hotel telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $Hotel= Hotel::findorfail($id);
        $About = About::all();
        return view('hotel.detail',compact('Hotel','About'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Hotel= Hotel::findorfail($id);
        return view('dashboard.hotel.edit',compact('Hotel'));
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
            'deskripsi'=>'required'
        ]);
        
        $Hotel= Hotel::findorfail($id);
         
        if($request->has('gambar')){
             $gmbr= $request->gambar;
             $namaFile = time().rand(100,999).".".$gmbr->getClientOriginalExtension();
             $gmbr->move(public_path().'/hotel',$namaFile);

             $hotel_data= [
                'nama'=> $request->nama,
                'harga'=> $request->harga,
                'deskripsi'=> $request->deskripsi,
                'gambar'=> $namaFile
            ];
            
         }else{
            $hotel_data= [
                'nama'=> $request->nama,
                'harga'=> $request->harga,
                'deskripsi'=> $request->deskripsi
            ];
         }
        $Hotel->update($hotel_data);
        
        return redirect('/hotels')->with('success','Hotel telah diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Hotel= Hotel::findorfail($id);
        $Hotel->delete();

        return redirect('/hotels')->with('success','Hotel telah dihapus!(Silahkan Cek pada Daftar Hapus Hotel)');
    }

    public function tampil_hapus()
    {
        $Hotel= Hotel::onlyTrashed()->paginate();
        return view('dashboard.hotel.hapus',compact('Hotel'));
    }
    
    public function restore($id)
    {
        $Hotel= Hotel::withTrashed()->where('id_hotel',$id)->first();
        $Hotel->restore();
        return redirect('/hotels')->with('success','Hotel telah direstore!(Silahkan cek pada Daftar Hotel)');
    }
   
    public function kill($id)
    {
        $Hotel= Hotel::withTrashed()->where('id_hotel',$id)->first();
        $Hotel->forceDelete();
        return redirect('/hotels')->with('success','Hotel telah diHapus!');

    }
}
