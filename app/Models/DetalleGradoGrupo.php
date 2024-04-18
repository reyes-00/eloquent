<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetalleGradoGrupo extends Model
{
    use HasFactory;
    protected $table = 'detalle_grado_grupos';
    protected $primaryKey = 'id_detalle_grupo_grado';
}
