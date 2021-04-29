<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table='imagies';
    protected $primaryKey = 'id_gmbr';
    protected $fillable = ['tipe','isi','gambar'];
}
