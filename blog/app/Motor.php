<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Motor extends Model
{
    use softDeletes;
    protected $table='motors';
    protected $primaryKey = 'id_motor';
    protected $fillable = ['nama','harga','deskripsi','kategori','gambar','stnk','users_id'];

    public function users(){
        return $this->belongsTo('App\User','users_id','id_user');
    }
}
