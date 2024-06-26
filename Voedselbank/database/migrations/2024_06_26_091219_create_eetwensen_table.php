<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEetwensenTable extends Migration
{
    public function up()
    {
        Schema::create('eetwensen', function (Blueprint $table) {
            $table->id();
            $table->string('naam');
            $table->string('omschrijving');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('eetwensen');
    }
}