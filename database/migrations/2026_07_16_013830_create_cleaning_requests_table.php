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
        Schema::create('cleaning_requests', function (Blueprint $table) {
            $table->id();
            
            // Link to the plot that needs cleaning
            $table->foreignId('plot_id')->constrained()->onDelete('cascade');
            
            // Requester (Family Member) Info
            $table->string('requester_name');
            $table->string('requester_phone');
            $table->string('requester_email')->nullable();
            $table->string('relationship_to_deceased')->nullable(); // e.g., "Son", "Spouse"
            
            // Service Details
            $table->date('requested_date');
            $table->date('completed_at')->nullable(); // Date when the cleaning was finished
            
            // Cleaning Status
            $table->enum('status', ['pending', 'in_progress', 'completed', 'cancelled'])
                  ->default('pending');
                  
            // Type of cleaning service (if applicable)
            $table->string('service_type')->default('Standard Weed & Wash'); // e.g., "Deep Clean", "Flower Placement"
            
            // Payment tracking (if it is a paid service)
            $table->decimal('fee', 8, 2)->default(0.00);
            $table->enum('payment_status', ['unpaid', 'paid', 'waived'])->default('unpaid');
            
            $table->text('notes')->nullable(); // Special instructions from the family
            $table->text('staff_notes')->nullable(); // Notes from the groundskeeper/staff
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cleaning_requests');
    }
};