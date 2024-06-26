<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEetwenspergezinTable extends Migration
{
    public function up()
    {
        Schema::create('eetwenspergezin', function (Blueprint $table) {
            $table->id(); 
            $table->unsignedBigInteger('gezinid');
            $table->unsignedBigInteger('eetwensid');
            $table->timestamps();

            $table->foreign('gezinid')->references('id')->on('gezinnen');
            $table->foreign('eetwensid')->references('id')->on('eetwensen');
        });
    }

    public function down()
    {
        Schema::dropIfExists('eetwenspergezin');
    }
}