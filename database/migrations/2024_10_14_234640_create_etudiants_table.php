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
        Schema::create('etudiants', function (Blueprint $table) {

            $table->uuid("id")->primary();
            $table->string('nom');
            $table->string('prenoms');
            $table->foreignUuid("user_id")
            ->references("id")
            ->on("users")
            ->cascadeOnDelete();

            $table->date("born");
            $table->string("domaine")->nullable();
            $table->string("adresse")->nullable();
            $table->string("bio")->nullable();
            $table->string("etablissement")->nullable();
            $table->string("tel");
            $table->string("sexe");
            $table->string("image")->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('etudiants');
    }
};
