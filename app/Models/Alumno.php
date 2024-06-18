<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;
    protected $table = 'alumnos';
    protected $primaryKey = 'id_alumnos';
    
    
    public function aspirante(){
        return $this->hasOne(Aspirante::class, 'id_aspirante', 'id_aspirante');
    }

    public function plantel(){
        return $this->belongsTo(Plantel::class, 'id_plantel', 'id_pantel');
    }
}