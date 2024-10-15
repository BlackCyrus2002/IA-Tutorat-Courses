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
        Schema::create("chapitre_etudiants", function (Blueprint $table) {
            $table->foreignUuid("chapitre_id")
                ->references("id")
                ->on("chapitres")->cascadeOnDelete();

            $table->foreignUuid("etudiant_id")
                ->references("id")
                ->on("users")->cascadeOnDelete();
            $table->timestamps();
            $table->boolean('finished');
            $table->primary(["chapitre_id", "etudiant_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chapitre_etudiants');
    }
};
