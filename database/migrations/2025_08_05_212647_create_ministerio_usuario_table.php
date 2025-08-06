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
        Schema::create('ministerio_usuario', function (Blueprint $table) {
            $table->id();
            $table->foreignId('ministerio_id')->constrained()->cascadeOnDelete();
            $table->foreignId('usuario_id')->constrained()->cascadeOnDelete();
            $table->boolean('lider')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ministerio_usuario');
    }
};
