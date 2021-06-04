<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table='transactions';
    protected $primaryKey = 'id_transaksi';
    protected $fillable = [ 'tanggal_ambil','tanggal_kembali','alamat',
                            'foto1','foto2','foto3','total','catatan',
                            'jenis_transaksi','carts_id','name','email',
                            'handphone','carts_id','pembayaran','selesai'];

    public function users(){
        return $this->belongsTo('App\User','users_id','id_user');
    }
    public function carts(){
        return $this->belongsTo('App\Cart','carts_id','id_cart');
    }

}
