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
        Schema::create('MonsterStats', function (Blueprint $table) {
            $table->bigIncrements("MonsterStatsID");
            $table->unsignedBigInteger("MonsterID");
            $table->foreign("MonsterID")->references("MonsterID")->on("Monster");
            $table->integer("STR");
            $table->integer("DEX");
            $table->integer("CON");
            $table->integer("INT");
            $table->integer("WIS");
            $table->integer("CHA");
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MonsterStats');
    }
};
