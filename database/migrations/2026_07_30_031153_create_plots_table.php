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
        Schema::create('plots', function (Blueprint $table) {
            $table->id();
            $table->string('plot_number');
            $table->string('section'); // e.g., "Section A", "North Garden"
            $table->string('row')->nullable(); // e.g., "Row 12"
            
            // Plot Status
            $table->enum('status', ['available', 'reserved', 'occupied'])
                  ->default('available');
            
            // Optional: Financial tracking
            $table->decimal('price', 10, 2)->nullable();
            
            $table->text('notes')->nullable();
            $table->timestamps();

            // Prevent duplicate plot numbers in the same section/row
            $table->unique(['section', 'row', 'plot_number']);
        });

        // Add a foreign key to burial_records to link it to a plot
        Schema::table('burial_records', function (Blueprint $table) {
            $table->foreignId('plot_id')->nullable()->constrained('plots')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('burial_records', function (Blueprint $table) {
            $table->dropForeign(['plot_id']);
            $table->dropColumn('plot_id');
        });
        
        Schema::dropIfExists('plots');
    }
};