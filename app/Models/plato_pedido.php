<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class plato_pedido extends Model
{
    use HasFactory;
    //relacion uno a muchos invertida
    public function plato(){
        return $this->belongsTo('App\Models\plato');
    }
}
