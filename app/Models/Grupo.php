<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Grupo extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'status'
    ];

    public function artistas()
    {
        return $this->belongsToMany(Artista::class, 'grupo_membro', 'grupo_id', 'artista_id');
    }
}
