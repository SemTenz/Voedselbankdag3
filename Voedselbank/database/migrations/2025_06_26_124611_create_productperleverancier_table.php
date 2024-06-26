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
        Schema::create('productperleverancier', function (Blueprint $table) {
            $table->id();
            $table->foreignId('leverancier_id')->constrained('leveranciers');
            $table->foreignId('product_id')->constrained('product'); // Juiste tabelnaam gebruiken
            $table->date('Datum_Aangeleverd');
            $table->date('Datum_Eerstvolgende_Levering');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productperleverancier');
    }
};
