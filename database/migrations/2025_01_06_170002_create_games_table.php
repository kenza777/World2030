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
    Schema::create('games', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('team_home_id');
        $table->unsignedBigInteger('team_away_id');
        $table->unsignedBigInteger('stadium_id');
        $table->date('match_date');
        $table->time('match_time');
        $table->string('status')->default('à venir');
        $table->timestamps();

        // Clés étrangères
        $table->foreign('team_home_id')->references('id')->on('teams')->onDelete('cascade');
        $table->foreign('team_away_id')->references('id')->on('teams')->onDelete('cascade');
        $table->foreign('stadium_id')->references('id')->on('stadiums')->onDelete('cascade');
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
