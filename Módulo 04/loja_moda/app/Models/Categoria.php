<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'descricao','publicacao_id'];

    public function produtos()
    {
        return $this->belongsTo(Produto::class);
    }

   

    public function publicacoes()
    {
        return $this->hasMany(Publicacao::class);
    }
}
