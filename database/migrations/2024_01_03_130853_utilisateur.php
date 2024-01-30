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
        Schema::create("utilisateurs", function (Blueprint $table) {
            $table->string("login")->primary();
            $table->string('password');
            $table->enum("type", ["administrateur", "user"]);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("utilisateurs");
    }
};
