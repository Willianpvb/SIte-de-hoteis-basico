<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Imovel extends Model{

    protected $table = 'imoveis';
    
    public $timestamps = false;

    protected $fillable = ['tipo',
                            'venda',
                            'endereco',
                            'valor',
                            'image',
                            'dono_email'];
                            
    public function usuario()
    {
        return $this->belongsTo(User::class);
    }

}