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
        Schema::create('games', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->time('time');
            $table->unsignedBigInteger('yellow_team_id');
            $table->unsignedBigInteger('blue_team_id');
            $table->integer('yellow_score');//sets: min 0 max 2
            $table->integer('blue_score');//sets: min 0 max 2
            $table->timestamps();

            // Foreign key restrictions with onDelete('RESTRICT')
            $table->foreign('yellow_team_id')->references('id')->on('teams')->onDelete('RESTRICT');
            $table->foreign('blue_team_id')->references('id')->on('teams')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('games');
    }
};
