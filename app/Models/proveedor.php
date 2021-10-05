<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class proveedor extends Model
{
    use HasFactory;
    protected $table = "proveedor";
    
    //Relacion uno a muchos
    public function proveedorInsumos(){
        return $this->hasMany('App\Models\proveedor_insumo');

    }
}
