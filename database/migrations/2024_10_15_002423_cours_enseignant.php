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
        Schema::create("cours_enseignant", function(Blueprint $table){
            $table->foreignUuid("cours_id")
            ->references("id")
            ->on("cours")->cascadeOnDelete();

            $table->foreignUuid("enseignant_id")
            ->references("id")
            ->on("users")->cascadeOnDelete();
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
