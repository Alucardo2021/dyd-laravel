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
        Schema::create('TipoDeDaño', function (Blueprint $table) {
            $table->bigIncrements("TipoDeDañoID");
            $table->string("Nombre");
            $table->text("Descripcion");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('TipoDeDaño');
    }
};
