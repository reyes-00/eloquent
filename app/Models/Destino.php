<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;

    // Pasarle valores por defecto a los campos de la base 
    protected $attributes = [
        'name' => 'Canada',
    ];
    // protected $table = 'destinos';

    // protected $primaryKey = 'id';

    // // Desactivar el created_At y updated_At de la base de datos
    // public $timestamps = false;
}
