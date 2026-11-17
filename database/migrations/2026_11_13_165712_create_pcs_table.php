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
            $table->string('admin_server')->nullable();
            $table->foreignId('group_id')->nullable()->constrained('groups')->nullOnDelete();
            $table->string('device_name')->unique();
            $table->string('inventory_status')->nullable();
            $table->string('motherboard')->nullable();
            $table->string('cpu')->nullable();
            $table->integer('memory_mb')->nullable();
            $table->text('storage_details')->nullable();
            $table->integer('total_gb')->nullable();
            $table->integer('available_gb')->nullable();
            $table->text('video_adapter')->nullable();
            $table->text('network_controller')->nullable();
            $table->text('sound_card')->nullable();
            $table->string('optical_drive')->nullable();
            $table->text('monitor')->nullable();
            $table->string('ip_address')->nullable();
            $table->string('ipv6_address')->nullable();
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
