<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\postagem;


class cometario extends Model
{
    use HasFactory;
    protected $fillable = ['coteudo','data_comentario','foto'];

    public function postagem()
    {
        return $this->belongsTo(postagen::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

