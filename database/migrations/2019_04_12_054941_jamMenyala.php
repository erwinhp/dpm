<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class jamMenyala extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    Schema::create('jamMenyala', function (Blueprint $table) {
  $table->increments('JId');
  $table->string('idpel');
  $table->integer('daya');
  $table->integer('stand');
  $table->integer('totaljam');
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
