<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['user_id','produto_id', 'data_pedido', 'status', 'total','pedido_em', ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function produtos()
    {
        return $this->belongsTo(Produto::class);
    }
}

