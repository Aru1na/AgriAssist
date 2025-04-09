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
        Schema::create('dist_requests', function (Blueprint $table) {
            $table->id();
            $table->string('UserID');
            $table->string('fullName');
            $table->string('product');
            $table->string('amount');
            $table->string('price');
            $table->string('note');
            $table->string('mobile');
            $table->string('email');
            $table->string('address');
            $table->boolean('status');
            $table->timestamps();

            $table->foreign('mobile')->references('mobile')->on('users')->onDelete('cascade');
            $table->foreign('email')->references('email')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vendor_requests');
    }
};
