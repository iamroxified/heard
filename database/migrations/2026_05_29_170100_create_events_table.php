<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->enum('type', ['upcoming', 'past'])->default('upcoming');
            $table->date('event_date')->nullable();
            $table->string('location')->nullable();
            $table->text('short_description');
            $table->longText('full_description')->nullable();
            $table->string('featured_image_path')->nullable();
            $table->text('speaker_highlights')->nullable();
            $table->string('registration_link')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
