<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $table='carts';
    protected $primaryKey = 'id_cart';
    protected $fillable = ['motors_id','users_id'];

    public function users(){
        return $this->belongsTo('App\User','users_id','id_user');
    }
    public function motors(){
        return $this->belongsTo('App\Motor','motors_id','id_motor');
    }

}
