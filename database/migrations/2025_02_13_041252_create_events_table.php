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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->foreignId('platform_id')->nullable()->constrained('social_accounts'); // ✅ Fixed nullable FK
            $table->string('content_type')->nullable(); // e.g., 'Feeds', 'Reels'
            $table->string('title')->nullable();
            $table->longText('file_content')->nullable(); // ✅ JSON for structured data
            $table->date('event_date')->nullable();
            $table->time('event_time')->nullable(); // ✅ More efficient than dateTime
            $table->text('description')->nullable();
            $table->longText('image')->nullable(); // ✅ JSON allows multiple image URLs
            $table->boolean('is_active')->default(true);
            $table->foreignId('user_id')->nullable()->constrained('users'); // ✅ Fixed nullable FK
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
