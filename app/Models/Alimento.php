<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alimento extends Model
{
    protected $table = 'alimento';
    protected $fillable = [
        'Nome',
        'unidade_medida',
        'descricao'
    ];
}
