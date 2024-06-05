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
        Schema::table('kiosks', function (Blueprint $table) {
            $table->foreignId('categories');
            $table->index('categories');
        });

        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->integer('priority');
            $table->foreignId('items');
            $table->index('items');
            $table->foreign('id')->references('categories')->on('kiosks');
            $table->timestamps();
        });

        Schema::create('menus', function (Blueprint $table) {
            $table->id();
            $table->foreignId('items');
            $table->index('items');
            $table->foreign('id')->references('items')->on('categories');
            $table->float('price');
            $table->text('image');
        });

        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->text('name');
            $table->float('price');
            $table->text('description');
            $table->text('image');
            $table->foreign('id')->references('items')->on('categories')->on('menus');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('kiosks', function (Blueprint $table) {
            $table->dropColumn('categories');
        });

        Schema::dropIfExists('categories');
        Schema::dropIfExists('items');
        Schema::dropIfExists('menus');
    }
};
