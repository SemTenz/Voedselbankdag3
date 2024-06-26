<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGezinnenTable extends Migration
{
    public function up()
    {
        Schema::create('gezinnen', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('code');
            $table->string('omschrijving');
            $table->integer('aantalvolwassenen');
            $table->integer('aantalkinderen');
            $table->integer('aantalbabys');
            $table->integer('totaalaantalpersonen');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gezinnen');
    }
}