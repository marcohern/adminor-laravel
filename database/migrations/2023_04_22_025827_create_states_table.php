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
      Schema::create('states', function (Blueprint $table) {
        $table->id();
        $table->string('iso3',3)->unique();
        $table->string('slug',64)->unique();
        $table->decimal('lat');
        $table->decimal('lng');
        $table->unsignedBigInteger('country_id');
        $table->string('name');

        $table->foreign('country_id')->references('id')->on('countries');
      });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      Schema::dropIfExists('states');
    }
};
