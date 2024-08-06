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
        Schema::create('reservation_forms', function (Blueprint $table) {
            $table->id();
            $table->timestamps();

            $table->unsignedBigInteger('users_id');
            $table->unsignedBigInteger('post_flayer_id');
            $table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('post_flayer_id')->references('id')->on('post_flayers')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservation_forms');
    }
};
