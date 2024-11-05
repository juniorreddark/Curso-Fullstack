<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Itens_Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['pedido_id', 'produto_id', 'quantidade', 'preco_unitario'];

    public function pedidos()
    {
        return $this->belongsTo(Pedido::class);
    }

    public function produtos()
    {
        return $this->belongsTo(Produto::class);
    }
}
