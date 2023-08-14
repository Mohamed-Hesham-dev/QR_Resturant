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
        Schema::create('product_option_value', function (Blueprint $table) {
            $table->id();
            $table->decimal('price',10,2)->default(0.00);
            $table->foreignId('product_id')->constrained('resturant_product_dashboards')->onDelete('cascade');
            $table->foreignId('option_id')->constrained('resturant_option_dashboards')->onDelete('cascade');
            $table->foreignId('value_id')->constrained('resturant_value_dashboards')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_option_value');
    }
};
