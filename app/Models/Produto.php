<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    protected $fillable = ['modelo', 'marca', 'tipo', 'preco', 'quantidade', 'codigo', 'garantia', 'fornecedor_id'];

    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }
}
