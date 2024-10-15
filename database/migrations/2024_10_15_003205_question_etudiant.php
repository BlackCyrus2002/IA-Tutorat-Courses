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
        Schema::create("question_etudiants", function (Blueprint $table) {
            $table->foreignUuid("question_id")
                ->references("id")
                ->on("questions")->cascadeOnDelete();

            $table->foreignUuid("etudiant_id")
                ->references("id")
                ->on("users")->cascadeOnDelete();
            $table->timestamps();
            $table->boolean('status');
            $table->primary(["question_id", "etudiant_id"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('question_etudiants');
    }
};
