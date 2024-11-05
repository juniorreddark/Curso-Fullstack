<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    use HasFactory;

    public $fillable = ['titulo_prato', 'conteudo', 'foto', 'local','cidade','empresa_id','comentario_id', 'avaliacao_id'];


    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function cometario()
    {

        return $this->hasMany(Cometario::class);
    }

    public function avaliacao()
    {
        return $this->hasMany (Avaliacao::class);
    }
}


