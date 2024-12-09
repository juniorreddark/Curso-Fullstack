<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Validator;
class Publicacao extends Model
{
    use HasFactory;

    protected $table = 'publicacao';

    protected $fillable = ['empresa_id','categoria_id','foto','produto_id', 'titulo', 'conteudo'];

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
        return $this->belongsTo(Categoria::class);
    }
}
