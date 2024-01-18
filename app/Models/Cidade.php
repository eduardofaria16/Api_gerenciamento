<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cidade extends Model
{
    use HasFactory;
    protected $fillable = ['nome'];

    protected $with =[
        'produto',
    ];

    public function produto()
    {
        return $this->belongsTo(Produto::class, 'id_cidade');
    }
}
