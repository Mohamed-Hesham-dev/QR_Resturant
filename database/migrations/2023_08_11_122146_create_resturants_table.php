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
        Schema::create('resturants', function (Blueprint $table) {
            $table->id();
            $table->string('resturant_name');
            $table->string('package');
            $table->string('resturant_logo');
            $table->string('resturant_cover')->nullable();
            $table->foreignId('foodcourt_id')->nullable()->onDelete('cascade')->default(1);
            //$table->boolean('is_active');
            $table->date('end_date')->nullable();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('cascade');
            

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('resturants');
    }
};
