<?php

namespace App\Http\Controllers;
Use App\About;
Use App\Cart;
Use App\Transaction;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $About= About::all();
        $Transaksi=Transaction::get();
        return view('order',compact('Transaksi','About'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $About= About::all();
        $Cart= Cart::all();
        return view('checkout',compact('About','Cart'));
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
            'email'=>'required',
            'tanggal_ambil'=>'required | date_format:Y-m-d',
            'tanggal_kembali'=>'required | date_format:Y-m-d',
            'foto1'=>'required',
            'foto2'=>'required',
            'foto3'=>'required',
            'alamat'=>'required',
            'telp'=>'required',
            'catatan'=>'required',
            'total'=>'required'
        ]);
        $jenis= '1';
        $pembayaran = '1';
        $selesai    = '1';
        //foto1
        $foto1= $request->foto1;
        $file1 = time().rand(100,999).".".$foto1->getClientOriginalExtension();
        //foto2
        $foto2= $request->foto2;
        $file2 = time().rand(100,999).".".$foto2->getClientOriginalExtension();
        //foto3
        $foto3= $request->foto3;
        $file3 = time().rand(100,999).".".$foto3->getClientOriginalExtension();
        
        $Transaksi= Transaction::create([
            'name'=> $request->nama,
            'email'=> $request->email,
            'tanggal_ambil'=> $request->tanggal_ambil,
            'tanggal_kembali'=> $request->tanggal_kembali,
            'foto1'=> $file1,
            'foto2'=> $file2,
            'foto3'=> $file3,
            'alamat'=> $request->alamat,
            'handphone'=> $request->telp,
            'catatan'=> $request->catatan,
            'total'=> $request->total,
            'carts_id'=> $request->id_cart,
            'jenis_transaksi'=>$jenis,
            'pembayaran'=>$pembayaran,
            'selesai'=>$selesai
            ]);
            
        $foto1->move(public_path().'/berkas/ktp',$file1);
        $foto2->move(public_path().'/berkas/selfie',$file2);
        $foto3->move(public_path().'/berkas/jaminan',$file3);
        return redirect('/checkout')->with('success','Pesanan telah ditambahkan!');
        }
        
        /**
         * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function pembayaran()
    {
        $Transaksi=Transaction::get();
        return view('dashboard.transaksi.confPembayaran',compact('Transaksi'));
    }

    public function TransaksiMitra()
    {
        $Transaksi=Transaction::get();
        return view('mitra.transaksi.home',compact('Transaksi'));
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
