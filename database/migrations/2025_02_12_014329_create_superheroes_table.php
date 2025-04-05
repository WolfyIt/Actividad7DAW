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
        Schema::create('superheroes', function (Blueprint $table) {
            $table->engine = 'InnoDB'; // Asegúrate de usar InnoDB
            $table->id();
            $table->string('name');
            $table->text('description');
            $table->string('real_name');
            // Usar unsignedBigInteger para las claves foráneas
            $table->unsignedBigInteger('universo_id');
            $table->unsignedBigInteger('superhero_type_id');
            $table->unsignedBigInteger('gender_id');
            $table->text('powers');
            $table->string('affiliation');
            $table->timestamps();

            // Definir las claves foráneas
            $table->foreign('universo_id')->references('id')->on('universos')->onDelete('cascade');
            $table->foreign('superhero_type_id')->references('id')->on('superhero_types')->onDelete('cascade');
            $table->foreign('gender_id')->references('id')->on('genders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('superheroes');
    }
};
