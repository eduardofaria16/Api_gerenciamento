<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;
    public function products()
    {
        return $this->hasMany(Produto::class, 'id_cidade');
    }
}
