<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'valor', 'estoque', 'id_marca','estoque', ];


    protected $with =[
        'marca',

    ];


       public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca')->first();
    }

}
