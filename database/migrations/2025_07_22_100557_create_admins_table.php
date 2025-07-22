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
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');

            // Optional: Role or permission-based control
            $table->string('role')->default('admin'); // e.g. 'superadmin', 'moderator', etc.

            // Optional: Profile-related fields
            $table->string('phone')->nullable();
            $table->string('avatar')->nullable(); // for profile pictures

            // Optional: For multi-auth or soft login tracking
            $table->boolean('is_active')->default(true);
            $table->timestamp('last_login_at')->nullable();

            // Laravel's built-in support for remember me
            $table->rememberToken();

            // Laravel timestamps
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
