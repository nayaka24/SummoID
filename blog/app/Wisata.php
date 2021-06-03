<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class wisata extends Model
{
    use softDeletes;
    protected $table='wisatas';
    protected $primaryKey = 'id_wisata';
    protected $fillable = ['nama','harga','handphone','deskripsi','gambar','users_id'];

    public function users(){
        return $this->belongsTo('App\User','users_id','id_user');
    }
}
