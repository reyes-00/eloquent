<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Aspirante extends Model
{
    use HasFactory;
    protected $table = 'aspirantes';
    protected $primaryKey = 'id_aspirante';

      public function setKeyName($key)
    {
        return 'id_aspirante';
    }

    public function alumno(){
      return $this->belongsTo(Alumno::class, 'id_aspirante', 'id_aspirante');
    }

}
