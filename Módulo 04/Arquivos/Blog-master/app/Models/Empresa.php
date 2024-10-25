<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Empresa extends Model
{
    use HasFactory;

    protected $fillable = ['logo','foto','razao_social', 'cnpj', 'endereco','telefone','cep'];

    public function User()
    {
        return $this->belongsTo(User::class);
    } 
}
