<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = ['razao_social', 'cnpj', 'endereco', 'rede_social','telefone','numero','logo','produto_id','categoria_id'];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }

    public function publicacoes()
    {
        return $this->belongsTo(Publicacao::class);
    }
}
