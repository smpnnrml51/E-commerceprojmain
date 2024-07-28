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
        Schema::create('tbl_orders', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('fname');
            $table->string('lname');
            $table->text('delivery_address');
            $table->text('address')->nullable();
            $table->string('email');
            $table->string('phone');
            $table->unsignedBigInteger('customer_id');
            $table->json('products');
            $table->enum('status', ['pending', 'on_delivery', 'delivered'])->default('pending');
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tbl_orders');
    }
};
