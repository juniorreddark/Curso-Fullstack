<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'data_pedido', 'status', 'total'];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function produtos()
    {
        return $this->belongsTo(Produto::class);
    }
}
