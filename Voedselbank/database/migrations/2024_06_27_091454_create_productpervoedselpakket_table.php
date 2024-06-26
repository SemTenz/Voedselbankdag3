<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductpervoedselpakketTable extends Migration
{
    public function up()
    {
        Schema::create('productpervoedselpakket', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('voedselpakketid');
            $table->unsignedBigInteger('productid');
            $table->integer('aantalproducteenheden');
            $table->timestamps();

            // Assuming the correct table names are 'voedselpakketten' and 'producten'
            $table->foreign('voedselpakketid')->references('id')->on('voedselpakketten')->onDelete('cascade');
            // $table->foreign('productid')->references('id')->on('producten')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('productpervoedselpakket');
    }
}