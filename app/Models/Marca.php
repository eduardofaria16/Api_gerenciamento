<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Marca extends Model
{
    use HasFactory;


    protected $fillable = ['nome'];

    protected $with =[
        'produto',

    ];
    public function create()
    {
        $marcas = Marca::all();
        return view('cadastro_produto', compact('marcas'));
    }
    

       public function produto()
    {
        return $this->belongsTo(Produto::class);
    }

    public $timestamps = false;
   

    
}
