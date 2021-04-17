<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class News extends Model
{
    use softDeletes;
    protected $table='news';
    protected $primaryKey = 'id_berita';
    protected $fillable = ['judul','isi','gambar'];
}
