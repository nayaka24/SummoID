<?php

namespace App\Http\Controllers;
use App\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $News= News::paginate(10);
        return view('dashboard.berita.home',compact('News'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.berita.create');
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
            'judul'=>'required',
            'isi'=>'required',
            'gambar'=>'required'
        ]);
        
        $gmbr= $request->gambar;
        $namaFile = time().rand(100,999).".".$gmbr->getClientOriginalExtension();

        $news= News::create([
            'judul'=> $request->judul,
            'isi'=> $request->isi,
            'gambar'=> $namaFile
        ]);
        
        $gmbr->move(public_path().'/news',$namaFile);
        return redirect('/beritas')->with('success','Berita telah ditambahkan!');
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
        $News= News::findorfail($id);
        return view('dashboard.berita.edit',compact('News'));
        
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
            'judul'=>'required',
            'isi'=>'required'
        ]);

        $News= News::findorfail($id);
         
        if($request->has('gambar')){
             $gmbr= $request->gambar;
             $namaFile = time().rand(100,999).".".$gmbr->getClientOriginalExtension();
             $gmbr->move(public_path().'/news',$namaFile);

             $news_data= [
                'judul'=> $request->judul,
                'isi'=> $request->isi,
                'gambar'=> $namaFile
            ];
            
         }else{
            $news_data= [
                'judul'=> $request->judul,
                'isi'=> $request->isi
            ];
         }
        $News->update($news_data);
        
        return redirect('/beritas')->with('success','Berita telah diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $News= news::findorfail($id);
        $News->delete();

        return redirect('/beritas')->with('success','Berita telah diHapus!(Silahkan Cek pada Daftar Hapus Berita)');

    }

    public function tampil_hapus()
    {
        $News= news::onlyTrashed()->paginate();
        return view('dashboard.berita.hapus',compact('News'));
    }
    
    public function restore($id)
    {
        $News= news::withTrashed()->where('id_berita',$id)->first();
        $News->restore();
        return redirect('/beritas')->with('success','Berita telah direstore!(Silahkan cek pada Daftar Berita)');
    }
   
    public function kill($id)
    {
        $News= news::withTrashed()->where('id_berita',$id)->first();
        $News->forceDelete();
        return redirect('/beritas')->with('success','Berita telah diHapus!');

    }



}
