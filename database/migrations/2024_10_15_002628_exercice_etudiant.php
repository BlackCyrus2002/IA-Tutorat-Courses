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
        Schema::create("exercice_etudiants", function (Blueprint $table) {
            $table->foreignUuid("exercice_id")
                ->references("id")
                ->on("exercices")->cascadeOnDelete();

            $table->foreignUuid("etudiant_id")
                ->references("id")
                ->on("users")->cascadeOnDelete();
            $table->timestamps();
            $table->integer("nombre_point");
            $table->float("moyenne", 2);
            $table->primary(["exercice_id", "etudiant_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercice_etudiants');
    }
};
