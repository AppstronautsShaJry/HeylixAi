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
        Schema::create('social_accounts', function (Blueprint $table) {
            $table->id();
            $table->string('platform'); // e.g., Facebook, Google, Twitter
            $table->string('account_name'); // e.g., John Doe
            $table->boolean('active_status')->default(true); // Active or not
            $table->string('connection_type'); // e.g., Official, Non-Official
            $table->string('connection_status'); // e.g., Connected, Not Connected
            $table->string('account_type'); // e.g., Profile, Login, etc.
            $table->string('social_id')->nullable(); // Social platform ID (e.g., Facebook ID)
            $table->string('token')->nullable(); // Access token (if needed)
            $table->string('refresh_token')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_accounts');
    }
};
