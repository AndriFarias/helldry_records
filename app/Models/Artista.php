<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'nome',
        'dt_nascimento',
        'nacionalidade',
        'endereco',
        'email',
        'telefone',
        'status'
    ];

    public function grupos()
    {
        return $this->belongsToMany(Grupo::class, 'grupo_membro', 'artista_id', 'grupo_id');
    }
}
