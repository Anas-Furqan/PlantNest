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
        Schema::create('insert_accessories', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->string("Price");
            $table->string("Image");
            $table->string("Category");
            $table->string("Purpose");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('insert_accessories');
    }
};
