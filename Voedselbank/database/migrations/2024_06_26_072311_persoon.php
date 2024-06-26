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
        Schema::create('persoon', function (Blueprint $table) {
            $table->id();
            $table->string('gezinId');
            $table->string('voornaam');
            $table->string('tussenvoegsel');
            $table->string('achternaam');
            $table->string('geboortedatum');
            $table->string('TypePersoon');
            $table->boolean('IsVertegenwoordiger');
            $table->timestamps();
            $table->boolean('IsActive')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
