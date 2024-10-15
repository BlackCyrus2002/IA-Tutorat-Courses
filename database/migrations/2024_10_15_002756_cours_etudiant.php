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
        Schema::create("cour_etudiants", function (Blueprint $table) {
            $table->foreignUuid("cours_id")
                ->references("id")
                ->on("cours")->cascadeOnDelete();

            $table->foreignUuid("etudiant_id")
                ->references("id")
                ->on("users")->cascadeOnDelete();
            $table->timestamps();
            $table->boolean('finished');
            $table->primary(["cours_id", "etudiant_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cour_etudiants');
    }
};
