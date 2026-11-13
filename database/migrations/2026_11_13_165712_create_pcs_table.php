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
        Schema::create('pcs', function (Blueprint $table) {
            $table->id();

            $table->string('ip')->nullable();
            $table->string('os')->nullable();
            $table->string('cpu_name')->nullable(); 
            $table->integer('number_of_cores')->nullable(); 
            $table->integer('number_of_logical_processors')->nullable(); 
            $table->integer('cpu_max_clock_speed')->nullable(); 
            $table->integer('cpu_data_width')->nullable(); 
            $table->decimal('ram_total', 8, 2)->nullable(); 
            $table->decimal('ram_used', 8, 2)->nullable();  
            $table->decimal('ram_free', 8, 2)->nullable();  
            $table->decimal('disk_total', 10, 2)->nullable(); 
            $table->decimal('disk_used', 10, 2)->nullable();  
            $table->decimal('disk_free', 10, 2)->nullable(); 
            $table->string('gpu_name')->nullable(); 
            $table->decimal('gpu_memory_total', 8, 2)->nullable(); 
            $table->string('status')->nullable(); 

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pcs');
    }
};
