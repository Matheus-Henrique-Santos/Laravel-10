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
        // Schema::table('unidades', function (Blueprint $table) {
        //     $table->id();
        //     $table->string('unidade', 5);
        //     $table->string('descricao', 30);
        //     $table->timestamps();
        // });

        Schema::table('product', function(Blueprint $table) {
            // Verifique se a coluna 'unidade_id' não existe antes de adicioná-la
            if (!Schema::hasColumn('product', 'unidade_id')) {
                $table->unsignedBigInteger('unidade_id');
                $table->foreign('unidade_id')->references('id')->on('unidades');
            }
        });
        
        Schema::table('product_details', function(Blueprint $table) {
            // Verifique se a coluna 'unidade_id' não existe antes de adicioná-la
            if (!Schema::hasColumn('product_details', 'unidade_id')) {
                $table->unsignedBigInteger('unidade_id');
                $table->foreign('unidade_id')->references('id')->on('unidades');
            }
        });
        
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('product_details', function(Blueprint $table) {
            $table->dropForeign('product_details_unidade_id_foreign');
            $table->dropColumn('unidade_id');
        });

        Schema::table('product', function(Blueprint $table) {
            $table->dropForeign('product_unidade_id_foreign');
            $table->dropColumn('unidade_id');
        });

        Schema::dropIfExists('unidades');
    }
};
