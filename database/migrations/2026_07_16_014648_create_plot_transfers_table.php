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
        Schema::create('plot_transfers', function (Blueprint $table) {
            $table->id();
            
            // Foreign Keys
            $table->foreignId('burial_record_id')->constrained()->onDelete('cascade');
            $table->foreignId('old_plot_id')->constrained('plots')->onDelete('cascade');
            $table->foreignId('new_plot_id')->constrained('plots')->onDelete('cascade');
            
            // Transfer Details
            $table->date('transfer_date');
            $table->string('authorized_by_name'); // Family member or authority who authorized the move
            $table->string('authorization_document_path')->nullable(); // Optional: link to a signed permit PDF
            
            // Reasons & Notes
            $table->string('reason')->nullable(); // e.g., "Family request", "Consolidation", "Erosion issues"
            $table->text('notes')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('plot_transfers');
    }
};