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
        Schema::create('Monster', function (Blueprint $table) {
            $table->bigIncrements("MonsterID");
            $table->string("Nombre");
            $table->string("Tamanio");
            $table->string("Tipo");
            $table->integer("PuntoDeGolpe");
            $table->string("Alineamiento");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Monster');
    }
};
