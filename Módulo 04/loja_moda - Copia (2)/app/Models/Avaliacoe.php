<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Avaliacoe extends Model
{
    use HasFactory;

    protected $fillable = ['produto_id','user_id', 'nota', 'comentario','data_avaliacao'];

    public function produtos()
    {
        return $this->belongsTo(Produto::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
