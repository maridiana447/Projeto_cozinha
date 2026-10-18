<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno_turma extends Model
{
    protected $table = 'aluno_turma';
    protected $fillable = [
        'id_aluno_presenca',
        'id_modalidade'
    ];
}
