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
        Schema::create('booking', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('airport_id')->constrained()->onDelete('cascade');
            // $table->foreignId('fast_track_service_id')->constrained()->onDelete('cascade');
            $table->date('date');
            $table->time('time');
            $table->enum('payment', ['pending', 'confirmed']);
            $table->enum('service_type', ['departure_fast_track', 'arrival_fast_track']);
            $table->integer('number_of_adults');
            $table->integer('number_of_children');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('booking');
    }
};
