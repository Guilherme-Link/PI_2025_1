<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fornecedor extends Model
{
    protected $table = 'fornecedor';
    protected $fillable = ['nome', 'razao_social', 'cnpj', 'insc_estadual', 'cep', 'estado', 'cidade', 'rua', 'numero', 'bairro', 'complemento'];
}
