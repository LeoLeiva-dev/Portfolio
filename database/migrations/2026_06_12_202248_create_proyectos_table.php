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
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();

            $table->string('titulo');
            $table->string('slug')->unique();

            $table->text('descripcion_corta');

            $table->longText('descripcion_completa')->nullable();

            $table->string('imagen')->nullable();

            $table->string('github_url')->nullable();
            $table->string('demo_url')->nullable();

            $table->boolean('destacado')->default(false);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proyectos');
    }
};
