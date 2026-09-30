<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dicas extends Model
{
    protected $table = 'dicas';
    protected $fillable = [
        'titulo',
        'descricao',
        'categoria',
        'data_publicacao',
        'id_funcionario'
    ];
}
