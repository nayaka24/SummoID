<?php

namespace App\Http\Controllers;
use App\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $About= About::paginate(10);
        return view('dashboard.pengaturan.about.index',compact('About'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.pengaturan.about.create');
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
            'isi'=>'required'

        ]);
        
        $About= About::create([
            'judul'=> $request->judul,
            'isi'=> $request->isi,
        ]);
        
        return redirect('/about')->with('success','Tentang telah ditambahkan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $About= About::findorfail($id);
        return view('dashboard.pengaturan.about.edit',compact('About'));
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
        
        $About= About::findorfail($id);
        
        $about_data=[
            'judul'=> $request->judul,
            'isi'=> $request->isi,
        ];

        $About->update($about_data);
        
        return redirect('/about')->with('success','Tentang telah diedit!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $About= About::findorfail($id);
        $About->forceDelete();
        return redirect('/about')->with('success','Tentang telah dihapus!');

    }
}
