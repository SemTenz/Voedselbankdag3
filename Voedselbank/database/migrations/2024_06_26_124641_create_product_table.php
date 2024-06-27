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
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('categorie_id'); // categorieID veronderstel ik
            $table->string('naam');
            $table->string('soort_allergie')->nullable(); // soortallergie
            $table->string('barcode', 13)->nullable(); // barcode max 13 cijfers
            $table->date('houdbaarheid');
            $table->text('omschrijving')->nullable();
            $table->enum('status', ['op voorraad', 'niet op voorraad', 'niet leverbaar', 'over houdbaarheidsdatum'])->default('op voorraad');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
