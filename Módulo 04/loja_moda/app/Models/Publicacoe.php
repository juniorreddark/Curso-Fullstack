<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Publicacoe extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'empresa_id','categoria_id','produto_id', 'titulo', 'conteudo'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

    public function categoria()
    {
        return $this->belongsTo(categoria::class);
    }
}
