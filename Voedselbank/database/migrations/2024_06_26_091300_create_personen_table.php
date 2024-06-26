<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonenTable extends Migration
{
    public function up()
    {
        Schema::create('personen', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gezinid')->nullable();
            $table->string('voornaam');
            $table->string('tussenvoegsel')->nullable();
            $table->string('achternaam');
            $table->date('geboortedatum');
            $table->string('typepersoon');
            $table->boolean('isvertegenwoordiger')->nullable();
            $table->timestamps();

            $table->foreign('gezinid')->references('id')->on('gezinnen');
        });
    }

    public function down()
    {
        Schema::dropIfExists('personen');
    }
}