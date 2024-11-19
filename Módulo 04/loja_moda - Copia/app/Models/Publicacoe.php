<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Publicacoe extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'empresa_id', 'titulo', 'conteudo'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }
}
