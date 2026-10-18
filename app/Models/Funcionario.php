<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Funcionario extends Model
{
    protected $table = 'funcionario';
    protected $fillable = [
        'Nome',
        'email',
        'senha',
        'data_nascimento',
        'cpf',
        'cargo',
        'nif',
    ];
}
