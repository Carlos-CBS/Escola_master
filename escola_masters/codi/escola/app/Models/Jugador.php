<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jugador extends Model
{
    protected $fillable = [
        'nom',
        'equip',
        'posicio',
        'gols'
    ];
}
