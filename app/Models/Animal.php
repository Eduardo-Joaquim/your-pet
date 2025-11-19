<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    protected $fillable = [
        'nome',
        'especie',
        'idade',
        'raca',
        'descricao',
        'foto',
    ];
}

