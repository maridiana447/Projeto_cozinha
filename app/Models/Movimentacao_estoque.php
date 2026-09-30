<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimentacao_estoque extends Model
{
    protected $table = 'movimentacao_estoque';
    protected $fillable = [
        'id_estoque',
        'tipo_movimentacao',
        'quantidade',
        'dia',
        'id_funcionario'
    ];
}
