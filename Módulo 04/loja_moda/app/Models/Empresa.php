<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = ['logo','razao_social', 'cnpj', 'endereco', 'telefone','numero', 'cep', 'rede_social'];

    public function produtos()
    {
        return $this->hasMany(Produto::class);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class);
    }
}
