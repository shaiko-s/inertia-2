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
            $table->unsignedBigInteger('nutritionalable_id');
            $table->string('nutritionalable_type');
            $table->integer('calories');
            $table->integer('protein');
            $table->integer('fat');
            $table->integer('carbohydrates');
            $table->timestamps();

            $table->index(['nutritionalable_id', 'nutritionalable_type']);
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
