<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'preco', 'descricao','foto','estoque', 'categoria_id', 'publicacao_id','empresa_id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
    
    public function carrinho()
    {
        return $this->hasMany(Carrinho::class);
    }
    
    public function empresas()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function publicacoes()
    {
        return $this->belongsTo(Publicacao::class);
    }
}
  