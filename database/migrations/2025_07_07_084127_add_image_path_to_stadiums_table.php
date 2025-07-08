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
    Schema::table('stadiums', function (Blueprint $table) {
        $table->string('image_path')->nullable(); // Nullable in case some stadiums do not have images
    });
}

public function down()
{
    Schema::table('stadiums', function (Blueprint $table) {
        $table->dropColumn('image_path');
    });
}

};
