<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plantel extends Model
{
    use HasFactory;
    protected $table = 'plantel';
    protected $primaryKey = 'id_pantel';
}
