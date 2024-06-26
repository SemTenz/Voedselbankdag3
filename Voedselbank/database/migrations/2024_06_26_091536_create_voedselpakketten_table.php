<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVoedselpakkettenTable extends Migration
{
    public function up()
    {
        Schema::create('voedselpakketten', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('gezinid');
            $table->integer('pakketnummer');
            $table->date('datumsamenstelling');
            $table->date('datumuitgifte')->nullable();
            $table->string('status');
            $table->timestamps();

            $table->foreign('gezinid')->references('id')->on('gezinnen')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('voedselpakketten');
    }
}