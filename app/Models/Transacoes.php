<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transacoes extends Model
{
   protected $table = 'transacoes';
   protected $fillable = ['tipo', 'valor_total', 'forma_pagamento'];

   public function items_transacao()
    {
        return $this->hasMany(Item_transacao::class, 'id_transacao');
    }
}
