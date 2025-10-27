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
        Schema::create('food_packages', function (Blueprint $table) {
            $table->bigIncrements('food_pack_id');
            $table->foreignId('guest_id')
                  ->nullable()
                  ->constrained('guests','guest_id')
                  ->nullOnDelete();
            $table->string('name', 100);
            $table->decimal('price', 8,2);
            $table->smallInteger('quantity');
            $table->decimal('total', 8,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('food_packages');
    }
};
