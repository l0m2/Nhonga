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
        Schema::create('celulars', function (Blueprint $table) {
            $table->id();
            $table->string('imagemCelular')->nullable();
            $table->enum('marcaCelular', [
                'APPLE',
                'SAMSUNG', 
                'HUAWEI',
                'TECNO',
                'REDMIN',
                'INFINIX',
                'ITEL',
                'VODACOM-MOBILE', 
                'MOVITEL-MOBILE',
                'XIAOMI',
                'OPPO',
                'VIVO',
                'LG',
                'SONY',
                'NOKIA',
                'MOTOROLA',
                'LENOVO',
                'GOOGLE(Pixel)',
                'ONEPLUS',
                'ASUS',
                'HTC',
                'BLACKBERRY',
                'ACATEL',
                'ZTE',
                'MEIZU',
                'REALME',
                'GIONEE',
                'SHARP',
                'PARASONIC',
                'Não definida',
            ])->default('Não definida');

            $table->string('modeloCelular');
            $table->integer('capacidadeArmazenamentoCelular')->nullable();
            $table->integer('memoriaRamCelular')->nullable();
            $table->enum('corCelular', [
                  'Preto',
                  'Branco', 
                  'Prateado',
                  'Dourado',  
                  'Azul',
                  'Vermelho',
                  'Verde', 
                  'Cinza',
                  'Rosa',
                  'Roxo',
                  'Laranja',   
                  'Amarelo',
                  'Bronze',
                  'Não definida',
            ])->default('Não definida');

            $table->decimal('tamanhoTelaCelular', 4, 2)->nullable();

            $table->enum('sistemaOperacionalCelular',  [
               'Android',
               'iOS',
               'Não definido',
            ])->default('Não definido');

            $table->integer('bateriaCelular')->nullable(); 
        
            $table->enum('situacaoCelular' ,[
                'Novo',
                'Segunda Mão',
            ])->default('Novo');

            $table->decimal('precoCelular', 10, 2);           
            $table->unsignedBigInteger('idLoja');
            $table->foreign('idLoja')->references('id')->on('lojas')->onDelete('cascade')->onUpdate('cascade');
            $table->text('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('celulars');
    }
};
