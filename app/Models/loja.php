<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class loja extends Model
{
    use HasFactory;
    
    protected $table='lojas';
/*
    public function loja()
    {
        return $this->belongsTo(loja::class, 'id');
    }*/

    protected $fillable=[
        'imagemLoja',
        'nomeLoja',
        'enderecoLoja',
        'emailLoja',
        'telefoneLoja',
        'whatsappLoja',
        'senhaLoja',
        'segundaAbertura',
        'segundaFechamento',
        'tercaAbertura',
        'tercaFechamento',
        'quartaAbertura',
        'quartaFechamento',
        'quintaAbertura',
        'quintaFechamento',
        'sextaAbertura',
        'sextaFechamento',
        'sabadoAbertura',
        'sabadoFechamento',
        'domingoAbertura',
        'domingoFechamento',
        'disponibilidadeEntregaLoja',
        'produtosVendasLoja',
        'descricaoLoja',
        'slug'
    ];
}
