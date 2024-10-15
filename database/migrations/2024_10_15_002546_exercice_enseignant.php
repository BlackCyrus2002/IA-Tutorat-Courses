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
        Schema::create('exercice_enseignants', function (Blueprint $table) {

            $table->foreignUuid("exercice_id")
            ->references("id")
            ->on("exercice_id")
            ->cascadeOnDelete();

            $table->foreignUuid("enseignant_id")
            ->references("id")
            ->on("users")
            ->cascadeOnDelete();

            $table->timestamps();

            $table->primary(["exercice_id", "enseignant_id"]);
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
