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
        Schema::create('insert_products', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->integer("Price");
            $table->integer("Quantity");
            $table->string("Image");
            $table->string("Cat_Name");
            $table->string("Details");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insert_products');
    }
};
