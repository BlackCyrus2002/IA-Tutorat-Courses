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
        Schema::table("cours", function(Blueprint $table){
            $table->foreignUuid("sous_categorie_id")
            ->references("id")
            ->on("sous_categories")
            ->cascadeOnDelete();
        });

        Schema::table("sous_categories", function(Blueprint $table){
            $table->foreignUuid("categorie_id")
            ->references("id")
            ->on("categorie_cours")
            ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
