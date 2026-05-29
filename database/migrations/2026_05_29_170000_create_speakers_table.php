<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('speakers', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('slug')->unique();
            $table->string('headshot_path')->nullable();
            $table->text('short_bio');
            $table->json('expertise_tags')->nullable();
            $table->text('speaking_topics')->nullable();
            $table->text('notable_past_stages')->nullable();
            $table->string('category');
            $table->enum('status', ['active', 'inactive'])->default('active');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('speakers');
    }
};
