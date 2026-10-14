<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\estoque;

class Alimento extends Model
{
    protected $table = 'alimento';
    protected $fillable = [
        'Nome',
        'unidade_medida',
        'categoria',
        'descricao',
        'qtd_minima'
    ];

    public function estoque()
    {
        return $this->hasMany(Estoque::class, 'id_alimento');
    }
}
