<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            // Ensure the 'user_id' column exists
            $table->unsignedBigInteger('user_id')->nullable();

            // Define the foreign key constraint
            $table->foreign('user_id')
                ->references('id') // Replace 'id' if your foreign table has a different primary key
                ->on('users') // Replace 'users' with the correct table name
                ->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('posts', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Drop the foreign key constraint
            $table->dropColumn('user_id');   // Remove the 'user_id' column
        });
    }
};
