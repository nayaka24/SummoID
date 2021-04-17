<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class hotel extends Model
{
    use softDeletes;
    protected $table='hotels';
    protected $primaryKey = 'id_hotel';
    protected $fillable = ['nama','harga','deskripsi','gambar'];
}
