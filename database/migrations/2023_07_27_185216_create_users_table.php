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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nomeUser');
            $table->string('emailUser')->unique();
            $table->enum('sexoUser' , [
                'Não definido',
                'Masculino',
                'Feminino',
            ])->default('Não definido');
            
            $table->string('telefoneUser')->nullable()->unique();
            $table->string('whatsappUser')->unique();
            $table->string('senhaUser')->unique();
            $table->text('slug');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
