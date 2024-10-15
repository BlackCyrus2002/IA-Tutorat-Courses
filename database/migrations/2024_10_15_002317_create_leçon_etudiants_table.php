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
        Schema::create('leçon_etudiants', function (Blueprint $table) {

            $table->foreignUuid("leçon_id")
            ->references("id")
            ->on("leçons")
            ->cascadeOnDelete();

            $table->foreignUuid("etudiant_id")
            ->references("id")
            ->on("users")
            ->cascadeOnDelete();

            $table->boolean("finished");

            $table->timestamps();

            $table->primary(["leçon_id", "etudiant_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('leçon_etudiants');
    }
};
