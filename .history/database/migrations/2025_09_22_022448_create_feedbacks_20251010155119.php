<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('resident_id');
            $table->unsignedBigInteger('service_request_id');
            $table->tinyInteger('rating'); // 1-5
            $table->text('comments')->nullable();
            $table->timestamps();

            // Optional foreign keys
            // $table->foreign('resident_id')->references('id')->on('residents')->onDelete('cascade');
            // $table->foreign('service_request_id')->references('id')->on('service_requests')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('feedback');
    }
};
