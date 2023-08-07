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
        Schema::create('carros', function (Blueprint $table) {
            $table->id();
            $table->string('imagemCarro')->nullable();
            $table->enum('marcaCarro' , [
                'TOYOTA',
                'FORD',
                'HONDA',
                'CHEVROLET',
                'VOLKSWAGEN(VW)',
                'NISSAN',
                'HYUNDAI',
                'BMW',
                'MERCEDES-BENZ',
                'AUDI',
                'KIA',
                'SUBARU',
                'JEEP',
                'MAZDA',
                'VOLVO',
                'TOYOTA-LEXUS',
                'LAND ROVER',
                'MITSUBISHI',
                'PEUGEOT',
                'FIAT',
                'SUZUKI',
                'JAGUAR',
                'PORSCHE',
                'TESLA',
                'MINI',
                'MAHINDRA',
                'ACURA',
                'CADILLAC',
                'BUICK',  
                'CHRYSLER',
                'ASTON MARTIN',
                'FERRARI',
                'LAMBORGHINI',
                'BUGATTI',
                'ROLLS-ROYCE',
                'BENTLEY',
                'MCLAREN',
                'LOTUS',
                'BE-GO',
                'RENAULT',
                'Não definida',
            ])->default('Não definida');

            $table->string('modeloCarro');
            $table->string('fabricanteCarro')->nullable();
            $table->integer('anoCarro')->nullable();

            $table->enum('corCarro', [
                'Não definida',
                'Preto',
                'Branco', 
                'Prateado',
                'Dourado',   
                'Rosa',
                'Azul',  
                'Vermelho',
                'Verde',
                'Cinza',
                'Roxo',
                'Laranja',     
                'Amarelo',
                'Bronze', 
                'Vermelho metálico',
                'Azul metálico',     
                'Cinza metálico',
                'Preto metálico',  
            ])->default('Não definida');

            $table->enum('transmissaoCarro', ['Manual', 'Automático'])->default('Automático');
            
            $table->enum('combustivelCarro',[
                'Gasolina',
                'Gasóleo',
                'Álcool',
                'GNV (Gás Natural Veicular)',
                'Eletricidade',
                'Hidrogénio',
                'Não definido',
            ])->default('Não definido');

            $table->integer('quilometragemCarro')->nullable();
            $table->integer('potenciaCarro')->nullable();
            $table->decimal('precoCarro', 10, 2);
            
            $table->enum('situacaoCarro' ,[
                'Novo',
                'Segunda Mão',
            ])->default('Novo');

            $table->text('descricaoCarro')->nullable();
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
        Schema::dropIfExists('carros');
    }
};
