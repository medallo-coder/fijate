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
        Schema::create('devices', function (Blueprint $table) {
            $table->id();
            $table->string('equipo')->nullable();
            $table->string('seriales');
            $table->string('estado')->nullable();
            $table->string('accesorios');
            $table->string('observacion')->nullable();
            $table->string('imagenes')->nullable();
            $table->string('firma')->nullable();

            $table->foreignId('user_id')
            ->nullable()
            ->constrained()
            ->onDelete('cascade');
            
            $table->DateTime('fecha_entrega')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('devices');
    }
};
