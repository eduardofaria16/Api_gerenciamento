<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produto extends Model
{
    use HasFactory;
    
    protected $fillable = ['nome', 'valor', 'estoque', 'id_marca','estoque', 'id_cidade'];

    protected $with =[
        'marca',
        'cidade',
    ];


       public function marca()
    {
        return $this->belongsTo(Marca::class, 'id_marca');
    }
    public function cidade()
    {
        return $this->belongsTo(Cidade::class, 'id_cidade');
    }

}
