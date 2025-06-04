<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item_transacao extends Model
{
    protected $table = 'item_transacao';
    protected $fillable = ['id_produto', 'id_transacao', 'quantidade', 'desconto', 'valor_unitario'];

    public function transacao()
    {
        return $this->belongsTo(Transacoes::class);
    }

}
