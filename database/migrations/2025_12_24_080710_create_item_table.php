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
        Schema::create('item', function (Blueprint $table) {
            $table->string('item_id')->primary();
            $table->string('category_id');
            $table->foreign('category_id')->references('category_id')->on('category');
            $table->string('name')->unique();
            $table->string('sku')->unique();
            $table->text('desc')->nullable();
            $table->integer('price');
            $table->integer('stock');
            $table->enum('status', ['active', 'inactive']);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item');
    }
};
