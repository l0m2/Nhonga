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
        Schema::create('pcs', function (Blueprint $table) {
            $table->id();
            $table->string('imagemPc')->nullable();
            $table->enum('marcaPc',[
                'Não definido',
                'HP',
                'DELL',
                'LENOVO',
                'APPLE',
                'ASUS',
                'ACER',
                'TOSHIBA',
                'SONY',
                'SAMSUNG',
                'MSI',
                'LG',
                'FUJITSU',
                'PANASONIC',
                'HUAWEI',
                'MICROSOFT(Surface)',
                'RAZER',
            ])->default('Não definido');

            $table->string('modeloPc');
            $table->string('processadorPc');

            $table->enum('sistemaOperacionalPc', [
                'Windows',
                'macOS',
                'Linux',
                'Não definido',
            ])->default('Não definido');

            $table->integer('geracaoPc')->nullable();
            $table->integer('capacidadeArmazenamentoPc');
            $table->integer('memoriaRamPc');
            $table->integer('portasUsbPc')->nullable();
            $table->decimal('tamanhoTelaPc', 4, 2)->nullable();
            $table->boolean('wifiPc')->default(false);
            $table->boolean('bluetoothPc')->default(false);
            $table->boolean('webcamPc')->default(false);
            $table->boolean('tecladoPc')->default(false);
            $table->boolean('mousePc')->default(false);
            $table->boolean('monitorPc')->default(false);

            $table->enum('situacaoPc' ,[
                'Novo',
                'Segunda Mão',
            ])->default('Novo');

            $table->decimal('precoPc', 10, 2);
            $table->text('descricaoPc')->nullable();
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
        Schema::dropIfExists('pcs');
    }
};
