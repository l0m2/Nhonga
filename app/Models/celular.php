<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\loja;

class celular extends Model
{
    use HasFactory;

    protected $table='celulars';

    public function loja()
    {
        return $this->belongsTo(loja::class, 'idLoja');
    }
    
    protected $fillable=[
   'imagemCelular',
    'marcaCelular',
   'modeloCelular',
   'capacidadeArmazenamentoCelular',
   'memoriaRamCelular',
   'corCelular',
   'tamanhoTelaCelular',
   'sistemaOperacionalCelular',
   'bateriaCelular',
    'situacaoCelular',
    'precoCelular',   
    'descricaoCelular',     
    'idLoja',
    'slug',
];

}
