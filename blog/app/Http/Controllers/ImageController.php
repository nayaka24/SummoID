<?php

namespace App\Http\Controllers;
use App\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Image= Image::paginate(10);
        return view('dashboard.pengaturan.gambar.index',compact('Image'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengaturan.gambar.create');
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
            'tipe'=>'required',
            'isi'=>'required',
            'gambar'=>'required'
        ]);
        
        $gmbr= $request->gambar;
        $namaFile = time().rand(100,999).".".$gmbr->getClientOriginalExtension();

        $Image= Image::create([
            'tipe'=> $request->tipe,
            'isi'=> $request->isi,
            'gambar'=> $namaFile
        ]);
        
        $gmbr->move(public_path().'/image',$namaFile);
        return redirect('/gambar')->with('success','Gambar telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Image= Image::findorfail($id);
        return view('dashboard.pengaturan.gambar.edit',compact('Image'));
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
            'tipe'=>'required',
            'isi'=>'required'
        ]);

        $Image= Image::findorfail($id);
         
        if($request->has('gambar')){
             $gmbr= $request->gambar;
             $namaFile = time().rand(100,999).".".$gmbr->getClientOriginalExtension();
             $gmbr->move(public_path().'/image',$namaFile);

             $gambar_data= [
                'tipe'=> $request->tipe,
                'isi'=> $request->isi,
                'gambar'=> $namaFile
                ];
            
         }else{
            $gambar_data= [
                'tipe'=> $request->tipe,
                'isi'=> $request->isi
            ];
         }
        $Image->update($gambar_data);
        
        return redirect('/gambar')->with('success','Gambar telah diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $Image= Image::findorfail($id);
        $Image->forceDelete();
        return redirect('/gambar')->with('success','Gambar telah dihapus!');
    }
}
