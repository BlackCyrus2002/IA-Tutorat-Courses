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
        Schema::create('chapitre_enseignants', function (Blueprint $table) {

            $table->foreignUuid("chapitre_id")
                ->references("id")
                ->on("chapitres")
                ->cascadeOnDelete();

            $table->foreignUuid("enseignant_id")
                ->references("id")
                ->on("users")
                ->cascadeOnDelete();

            $table->timestamps();

            $table->primary(["chapitre_id", "enseignant_id"]);
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
