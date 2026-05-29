<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('enquiries', function (Blueprint $table) {
            $table->id();
            $table->string('form_type')->default('contact');
            $table->string('name');
            $table->string('organisation')->nullable();
            $table->string('email');
            $table->string('phone')->nullable();
            $table->string('event_name')->nullable();
            $table->date('event_date')->nullable();
            $table->string('event_type')->nullable();
            $table->string('audience_size')->nullable();
            $table->string('location')->nullable();
            $table->longText('speaker_request')->nullable();
            $table->string('programme_support')->nullable();
            $table->string('budget')->nullable();
            $table->longText('message')->nullable();
            $table->enum('status', ['unread', 'read', 'replied', 'archived'])->default('unread');
            $table->timestamp('read_at')->nullable();
            $table->timestamp('replied_at')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('enquiries');
    }
};
