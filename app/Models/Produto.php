<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $table = 'produto';
    protected $fillable = ['nome', 'id_fornecedor', 'modelo', 'marca', 'tipo', 'custo','preco','observacao','quantidade'];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }
}
