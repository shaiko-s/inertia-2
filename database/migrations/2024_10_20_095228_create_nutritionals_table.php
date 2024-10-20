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
        Schema::create('nutritionals', function (Blueprint $table) {
            $table->id();
            $table->morphs('product');
            $table->integer('calories');
            $table->integer('protein');
            $table->integer('fat');
            $table->integer('carbohydrates');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('nutritionals');
    }
};
