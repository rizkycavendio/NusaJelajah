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
        Schema::create('tour_packages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('regions_id');
            $table->foreignId('categories_id');
            $table->string('title');
            $table->string('slug');
            $table->longText('description');
            $table->string('num_people');
            $table->string('tour_guide');
            $table->string('duration');
            $table->date('departure_date');
            $table->integer('price');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tour_packages');
    }
};
