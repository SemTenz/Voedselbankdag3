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
        Schema::create('gezin', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('code');
            $table->string('omschrijving');
            $table->string('aantalvolwassenen');
            $table->string('aantalkinderen');
            $table->string('aantalbabys');
            $table->string('totaalaantalpersonen');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gezin');
    }
};
