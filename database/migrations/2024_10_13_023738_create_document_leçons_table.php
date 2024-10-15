<?php

use App\Models\Icon;
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
        Schema::create("icons", function (Blueprint $table) {
            $table->id();
            $table->string("image")->unique();
        });

        Schema::create("documents", function (Blueprint $table) {
            $table->uuid("id");

            $table->string("titre");
            $table->string("path")->unique();
            $table->foreignIdFor(Icon::class, "id");
        });

        Schema::create('document_leçons', function (Blueprint $table) {
            $table->uuid("id")->primary();
            $table->string("titre");
            // $table->string("url");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('document_leçons');
    }
};