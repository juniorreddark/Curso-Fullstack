<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    use HasFactory;

    public $fillable = ['user_id', 'empresa_id','titulo_prato', 'conteudo', 'foto', 'local','cidade'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function cometario()
    {

        return $this->hasMany(Cometario::class);
    }
}


