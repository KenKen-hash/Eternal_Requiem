<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('burial_records', function (Blueprint $table) {

            $table->id();


            // Link to cemetery plot
            $table->foreignId('plot_id')
                ->nullable()
                ->constrained('plots')
                ->nullOnDelete();


            // Deceased Information
            $table->string('deceased_first_name');

            $table->string('deceased_last_name');

            $table->date('date_of_birth')
                ->nullable();

            $table->date('date_of_death')
                ->nullable();

            $table->date('burial_date')
                ->nullable();


            // Cemetery Location Details
            $table->string('section')
                ->nullable();

            $table->string('plot_number')
                ->nullable();

            $table->string('grave_number')
                ->nullable();


            // Additional Information
            $table->string('funeral_home')
                ->nullable();

            $table->string('next_of_kin_name')
                ->nullable();

            $table->string('next_of_kin_phone')
                ->nullable();

            $table->text('notes')
                ->nullable();


            $table->timestamps();


            // Searching optimization
            $table->index([
                'deceased_last_name',
                'deceased_first_name'
            ]);

            $table->index([
                'section',
                'plot_number'
            ]);

        });
    }


    public function down(): void
    {
        Schema::dropIfExists('burial_records');
    }
};