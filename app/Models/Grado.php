<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grado extends Model
{
    use HasFactory;
    protected $table = 'grados';
    protected $primaryKey = 'id_grado';

    protected $fillable = [
        'nombre'
    ];

    public $timestamps = false;

    public function grupos(){
        
    /**Relacion de Muchos a muchos */
    /** 1er argumento Clase del modelo relacionado 
     *  2do argumento nombre de la tabla pivote intermedia
     *  3er argumento FK de este modelo mapeoado
     *  4to argumento FK del otro modelo relacionado
    */
        return $this->belongsToMany(Grupo::class, 'detalle_grado_grupos','id_grado','id_grupos');
    }
}
