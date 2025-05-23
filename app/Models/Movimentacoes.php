<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimentacoes extends Model
{
   protected $fillable = ['tipo','id_produto','quantidade','id_pedido'];
}
