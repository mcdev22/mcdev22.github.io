<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChifredafsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chifredafs', function (Blueprint $table) {
            $table->id();
            $table->decimal('chiffre');
            $table->bigInteger('id_caissier')->unsigned()->nullable();
            $table->timestamps();
            $table->foreign('id_caissier')->references('id')->on('users')->onDelete('cascade'); 
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('chifredafs');
    }
}
