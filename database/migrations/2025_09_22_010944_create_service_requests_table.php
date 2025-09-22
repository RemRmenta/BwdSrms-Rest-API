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
        Schema::create('service_requests', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('resident_id');       // User.id
            $table->unsignedBigInteger('request_type_id');   // RequestType.id
            $table->unsignedBigInteger('request_status_id'); // RequestStatus.id
            $table->text('description')->nullable();
            $table->string('status')->default('pending');
            $table->unsignedBigInteger('service_worker_id')->nullable(); // User.id
            $table->string('service_proof')->nullable();
            $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_requests');
    }
};
