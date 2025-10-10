<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('request_assignments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('service_request_id');
            $table->unsignedBigInteger('service_worker_id');
            $table->timestamps();

            // Optional: foreign keys if you have service_requests and users table
            // $table->foreign('service_request_id')->references('id')->on('service_requests')->onDelete('cascade');
            // $table->foreign('service_worker_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('request_assignments');
    }
};
