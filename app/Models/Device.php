<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Device extends Model
{
    //modelo dispositivo
    protected $fillable = [
        'equipo',
        'seriales',
        'estado',
        'accesorios',
        'observacion',
        'imagenes',
        'firma',
        'user_id',
        'fecha_entrega',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

}


