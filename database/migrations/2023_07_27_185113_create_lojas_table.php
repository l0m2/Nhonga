<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('lojas', function (Blueprint $table) {
            $table->id();
            $table->string('imagemLoja')->nullable();
            $table->string('nomeLoja');
            $table->string('enderecoLoja');
            $table->string('emailLoja')->unique();
            $table->string('telefoneLoja')->unique()->nullable();
            $table->string('whatsappLoja')->unique();
            $table->string('senhaLoja')->unique();
        //Horarios loja
            $table->time('segundaAbertura')->nullable();
            $table->time('segundaFechamento')->nullable();
            $table->time('tercaAbertura')->nullable();
            $table->time('tercaFechamento')->nullable();
            $table->time('quartaAbertura')->nullable();
            $table->time('quartaFechamento')->nullable();
            $table->time('quintaAbertura')->nullable();
            $table->time('quintaFechamento')->nullable();
            $table->time('sextaAbertura')->nullable();
            $table->time('sextaFechamento')->nullable();
            $table->time('sabadoAbertura')->nullable();
            $table->time('sabadoFechamento')->nullable();
            $table->time('domingoAbertura')->nullable();
            $table->time('domingoFechamento')->nullable();
        //fim horarios loja
        $table->enum('disponibilidadeEntregaLoja', [
            'Não',
            'Apenas cidade de Maputo',
            'Apenas Matola',
            'Apenas Maputo Provincia',
            'Disponivel para qualquer Lugar do Pais',
        ])->default('Não');

        $table->enum ('produtosVendasLoja', [
                'Celulares.',
                'Aparelhagem-Som.',
                'Boutique.',
                'Loja Unisexo.',
                'Roupas para Homem.',
                'Roupas para Mulher.',
                'Sapatilhas.',
                'Computadores.',
                'Video-Jogos.',
                'Carros.',
                'Todos os acessórios (Contacte para mais informações).',
                'Todos Eletrônicos.',
                'Revendedor/a.',
            ])->default('Todos os acessórios (Contacte para mais informações).');

            $table->text('descricaoLoja')->nullable();
            $table->text('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lojas');
    }
};
