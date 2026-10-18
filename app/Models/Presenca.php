<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Presenca extends Model
{
    protected $table = 'presenca';
    protected $fillable = [
        'id_aluno_turma',
        'dia',
        'refeicao',
    ];
}
