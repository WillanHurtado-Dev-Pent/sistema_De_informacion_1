<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Proveedor extends Model
{
    protected $fillable = [
        'nombre', 'telefono'
    ];

    public function productos(){
        return $this->belongsToMany('App\Producto');
    }
}
