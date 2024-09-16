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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('nome_logradouro');
            $table->string('numero_logradouro');
            $table->string('complemento_logradouro');
            $table->string('cep');
            $table->string('municipio');
            $table->string('uf');
            $table->string('pais');
            $table->timestamps();
        });
    }
    // $table->foreignId('category_id')->constrained();

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adresses');
    }
};
