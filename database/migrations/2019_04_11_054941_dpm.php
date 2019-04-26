<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Dpm extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('dpm', function (Blueprint $table) {
  $table->increments('dpmid');
  $table->string('idpel');
  $table->string('nama');
  $table->string('alamat');
  $table->string('tarif');
  $table->integer('daya');
  $table->string('rbm')->default('');
  $table->integer('stand');
  $table->integer('datever');



  });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
