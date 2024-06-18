<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;
    protected $table = 'grupos';
    protected $primaryKey = 'id_grupos';

    public function grados(){
        
        /**Relacion de Muchos a muchos */
        /** 1er argumento Clase del modelo relacionado 
         *  2do argumento nombre de la tabla pivote intermedia
         *  3er argumento FK de este modelo mapeoado
         *  4to argumento FK del otro modelo relacionado
        */
        // return $this->belongsToMany(Grado::class, 'detalle_grado_grupos','id_grado','id_grupo');
        return $this->belongsToMany(Grado::class, 'detalle_grado_grupos','id_grupos','id_grado');
    }
}
