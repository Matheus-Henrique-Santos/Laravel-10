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
        // Criar tabela 'filials'
        Schema::create('filials', function (Blueprint $table) {
            $table->id();
            $table->string('filial', 30);
            $table->timestamps();
        });
    
        // Criar tabela 'product_filials'
        Schema::create('product_filials', function (Blueprint $table) {
            $table->id();
            $table->unsignedInteger('filial_id');
            $table->unsignedInteger('product_id');
            $table->decimal('price_sell');
            $table->integer('estoque_minimo');
            $table->integer('estoque_maximo');
            $table->timestamps();
    
            $table->foreign('filial_id')->references('id')->on('filials');
            // A referência para 'product' deve ser feita depois de criar a coluna 'price_sell'
            $table->foreign('product_id')->references('id')->on('product');
        });
    
        // Adicionar a coluna 'price_sell' à tabela 'product'
        Schema::table('product', function (Blueprint $table) {
            $table->decimal('price_sell');
        });
    }
    


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Schema::dropIfExists('product_filials');
    }
};
