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

        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resturant_id')->nullable()->constrained()->onDelete('cascade');
            $table->string('tablemethod');
            $table->string('clientname')->default('Method no need client name');
            $table->string('phonenumber')->nullable()->default('No number insert');
            $table->string('PickupTime')->nullable()->default('after 30 min');
            $table->string('address')->nullable();
            $table->string('payment')->default('cash');
            $table->integer('Items');
            $table->double('price');
            $table->enum('statue', ['pending', 'ACCEPTED', 'REJECTED','PREPARED','DELIVERD','ClOSED'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
