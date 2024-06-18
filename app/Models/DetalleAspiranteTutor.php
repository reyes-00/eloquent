<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleAspiranteTutor extends Model
{
    use HasFactory;
    protected $primaryKey = 'id_detalle_aspirante_tutores';
    protected $table = 'detalle_aspirante_tutores';
    
    protected  $fillable = [
        'id_detalle_aspirante_tutores',
        'id_tutor',
        'id_aspirante',
        'token'
    ];

}
