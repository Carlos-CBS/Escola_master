<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Llibre extends Model
{
    protected $fillable = [
        'titol', 
        'autor',
        'isbn',
        'any_publicacio'
    ];
}
