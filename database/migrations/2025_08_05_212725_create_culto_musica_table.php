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
        Schema::create('culto_musica', function (Blueprint $table) {
            $table->id();
             $table->foreignId('culto_id')->constrained()->cascadeOnDelete();
            $table->foreignId('musica_id')->constrained()->cascadeOnDelete();
            $table->string('tom')->nullable(); // tom para aquele culto
            $table->integer('ordem')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('culto_musica');
    }
};
