<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contacto extends Model
{
    protected $table = 'contacto';
    protected $fillable = [
        'id',
        'nombre',
        'email',
        'telefono',
        'mensaje',
        'created_at',
        'updated_at'
    ];
}
