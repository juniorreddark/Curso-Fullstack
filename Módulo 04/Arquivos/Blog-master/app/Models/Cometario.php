<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cometario extends Model
{
    use HasFactory;
    protected $fillable = ['conteudo','data_comentario','foto'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
