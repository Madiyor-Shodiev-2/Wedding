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
        Schema::create('services', function (Blueprint $table) {
            $table->id('service_id');
            $table->string('name');
            $table->integer('price');
            $table->enum('type', [
                'Music',
                'Animator',
                'Organizator',
                'Artist',
            ]);
            $table->text('description')->nullable();
            $table->foreignId('image_id')->constrained('images')->onDelete('cascade');
            $table->foreignId('venue_id')->constrained('venues')->onDelete('cascade')->references('venue_id');
            $table->string('telephone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
