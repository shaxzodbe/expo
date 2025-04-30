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
            $table->text('title');
            $table->text('subtitle')->nullable();
            $table->string('image');
            $table->text('video_url')->nullable();
            $table->text('button_text')->nullable();
            $table->string('button_link')->nullable();
            $table->text('button_text_secondary')->nullable();
            $table->string('button_link_secondary')->nullable();
            $table->string('background_color')->nullable();
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
