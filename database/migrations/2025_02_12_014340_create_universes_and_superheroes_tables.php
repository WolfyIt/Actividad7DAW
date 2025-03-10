<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('universes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps(); // Esto crea automáticamente 'created_at' y 'updated_at'
        });

        Schema::create('superheroes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('real_name')->nullable();
            $table->foreignId('universe_id')->nullable()->constrained('universes')->onDelete('set null');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('universes_and_superheroes_tables');
    }
};
