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
        Schema::create('product_colors_sizes', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_size_id');
            $table->foreign('product_size_id')->references('id')->on('product_sizes')->cascadeOnDelete();
            $table->unsignedBigInteger('product_color_id');
            $table->foreign('product_color_id')->references('id')->on('product_colors')->cascadeOnDelete();
            $table->integer('quantity');
            $table->decimal('price_two', 10, 2)->nullable();
            $table->decimal('discount', 10, 2)->nullable();
            $table->integer('status')->default(1);
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_colors_sizes');
    }
};
