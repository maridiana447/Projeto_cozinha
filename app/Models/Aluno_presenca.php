<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno_presenca extends Model
{
    protected $table = 'aluno_presenca';
    protected $fillable = [
        'nome',
        'email',
        'cpf'
    ];
}
