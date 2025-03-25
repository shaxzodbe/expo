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
        Schema::create('banners', function (Blueprint $table) {
            $table->id();
            $table->string('title');  // "Business Expo 2024"
            $table->string('heading'); // "Big Conference & Workshop"
            $table->text('background_image'); // Path to background image
            $table->text('video_url')->nullable(); // Optional video URL
            $table->string('register_button_text')->nullable();
            $table->string('register_button_link')->nullable();
            $table->string('view_more_button_text')->nullable();
            $table->string('view_more_button_link')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('banners');
    }
};
