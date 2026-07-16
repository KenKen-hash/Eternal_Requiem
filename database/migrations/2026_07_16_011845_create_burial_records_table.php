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
        Schema::create('burial_records', function (Blueprint $table) {
            $table->id();
            
            // Deceased Information
            $table->string('deceased_first_name');
            $table->string('deceased_last_name');
            $table->date('date_of_birth')->nullable();
            $table->date('date_of_death')->nullable();
            $table->date('burial_date')->nullable();
            
            // Cemetery Location Details
            $table->string('section')->nullable();      // e.g., "Section A", "Garden of Peace"
            $table->string('plot_number')->nullable();  // e.g., "Plot 142"
            $table->string('grave_number')->nullable(); // e.g., "Grave 3"
            
            // Additional Information
            $table->string('funeral_home')->nullable();
            $table->string('next_of_kin_name')->nullable();
            $table->string('next_of_kin_phone')->nullable();
            $table->text('notes')->nullable();          // For headstone inscriptions or special requests
            
            $table->timestamps();
            
            // Indexes for faster searching
            $table->index(['deceased_last_name', 'deceased_first_name']);
            $table->index(['section', 'plot_number']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('burial_records');
    }
};