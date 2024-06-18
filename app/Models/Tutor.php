<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutor extends Model
{
    use HasFactory;

    protected $table = 'tutores';
    protected $primaryKey = 'id_tutor_padre';
    public $timestamps = false;

    protected $fillable =[
        'nombre_tutor'
    ];
    public function hijos(){
        return $this->hasMany(DetalleAspiranteTutor::class, 'id_tutor', 'id_tutor_padre');
    }

    public function usuario(){
        return $this->hasOne(User::class, 'id_tutor','id_tutor_padre');
    }
}
