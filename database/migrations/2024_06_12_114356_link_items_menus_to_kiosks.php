<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class () extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('items', function (Blueprint $table) {
            // Add the foreignId with constraint
            $table->foreignId('kiosk_id')->constrained('kiosks');
        });

        Schema::table('menus', function (Blueprint $table) {
            // Add the foreignId with constraint
            $table->foreignId('kiosk_id')->constrained('kiosks');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('items', function (Blueprint $table) {
            // Drop the foreign key constraint and the column
            $table->dropForeign(['kiosk_id']);
            $table->dropColumn('kiosk_id');
        });

        Schema::table('menus', function (Blueprint $table) {
            // Drop the foreign key constraint and the column
            $table->dropForeign(['kiosk_id']);
            $table->dropColumn('kiosk_id');
        });
    }
};
