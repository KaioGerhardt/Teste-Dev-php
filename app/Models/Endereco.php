<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    use HasFactory;

    protected $fillable = [
        'cliente_id',
        'cep',
        'logradouro',
        'bairro',
        'cidade',
        'estado',
    ];

    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}