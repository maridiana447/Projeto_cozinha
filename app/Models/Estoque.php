<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Alimento;

class Estoque extends Model
{
    protected $table = 'estoque';
    protected $fillable = [
        'id_alimento',
        'quantidade',
        'data_validade',
        'qtd_minima'
    ];

    public function alimento()
    {
        return $this->belongsToMany(Alimento::class, 'id_alimento');
    }
}
