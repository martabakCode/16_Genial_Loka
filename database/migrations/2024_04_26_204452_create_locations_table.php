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
        Schema::create('locations', function (Blueprint $table) {
            $table->id();
            $table->integer('space_id')->unsigned();
            $table->string('name');
            $table->text('description');
            $table->string('longitude');
            $table->string('latitude');
            $table->string('food');
            $table->string('reproduction');
            $table->timestamps();
        });
        Schema::table('locations', function($table) {
            $table->foreign('space_id')->references('id')->on('spaces');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('locations');
    }
};
