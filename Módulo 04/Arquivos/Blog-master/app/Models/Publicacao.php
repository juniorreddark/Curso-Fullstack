<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Publicacao extends Model
{
    use HasFactory;
    protected $fillable =["user_id","id_publicacao","foto","titulo_prato","local",];

    public function user()
    {
        return $this->belongsTo(Useer::class);
    }
}
