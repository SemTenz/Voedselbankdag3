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
        Schema::create('ContactPerGezin', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('GezinId');
            $table->unsignedBigInteger('ContactId');
            $table->timestamps();
            $table->boolean('IsActive')->default(true);

            $table->foreign('GezinId')->references('id')->on('gezin');
            $table->foreign('ContactId')->references('id')->on('contact');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ContactPerGezin');
    }
};
