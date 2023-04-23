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
        Schema::create('general_info', function (Blueprint $table) {
            $table->id();
            $table->string('slug',64)->unique();
            $table->string('title');
            $table->string('subtitle');
            $table->decimal('lat');
            $table->decimal('lng');
            $table->string('phone',64);
            $table->string('address');
            $table->string('logo_path');
            $table->string('logo_bw_path');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('general_info');
    }
};
