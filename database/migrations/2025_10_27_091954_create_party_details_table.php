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
        Schema::create('party_details', function (Blueprint $table) {
            $table->bigIncrements('party_dtl_id');
            $table->foreignId('guest_id')
                  ->nullable()
                  ->constrained('guests', 'guest_id')
                  ->nullOnDelete();
            $table->string('check_in_date', 100);
            $table->string('check_in_time', 100);
            $table->string('check_out_time', 100);
            $table->string('time_extend', 100)->nullable();
            $table->smallInteger('adults')->nullable();
            $table->smallInteger('kids')->nullable();
            $table->string('branch', 100)->nullable();
            $table->string('occasion', 100);
            $table->string('party_package', 100)->nullable();
            $table->string('special_req')->nullable();
            $table->enum('party_status', ['finished','waiting','cancelled','pending'])->default('pending');
            $table->enum('payment_status', ['paid', 'unpaid'])->default('unpaid');
            $table->string('reservation_id')->nullable();
            $table->decimal('package_price', 8,2)->nullable();
            $table->decimal('grand_total' ,8,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('party_details');
    }
};
