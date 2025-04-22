<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alumne extends Model
{
    protected $table = 'alumnes';

    protected $fillable = [
        'nom',
        'correu',
        'adreça',
        'ciutat',
        'pais',
        'telefon',
        'master_id',
    ];

    public function master()
    {
        return $this->belongsTo(Master::class, 'master_id');
    }
}
