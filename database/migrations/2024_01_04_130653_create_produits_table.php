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
        Schema::create('produits', function (Blueprint $table) {
            $table->string("refpdt")->primary();
            $table->string("libpdt");
            $table->decimal("prix");
            $table->integer("Qnt");
            $table->string("description");
            $table->string("image");
            $table->string("type");
            $table->foreign("type")->references("type")->on('types')->cascadeOnDelete()->cascadeOnUpdate()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
