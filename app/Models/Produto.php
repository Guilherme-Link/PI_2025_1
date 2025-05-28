<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['nome', 'id_fornecedor', 'modelo', 'marca', 'tipo', 'custo','preco','observacao'];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }
}
