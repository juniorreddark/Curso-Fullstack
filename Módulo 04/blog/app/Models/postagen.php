<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class postagen extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'titulo','conteudo','foto','data_postagem'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
