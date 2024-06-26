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
        Schema::create('contact', function (Blueprint $table) {
            $table->id();
            $table->string('Straat');
            $table->string('Huisnummer');
            $table->string('Toevoeging')->nullable();
            $table->string('Postcode');
            $table->string('Woonplaats');
            $table->string('Email');
            $table->string('Mobiel');
            $table->timestamps();
            $table->boolean('IsActive')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact');
    }
};
