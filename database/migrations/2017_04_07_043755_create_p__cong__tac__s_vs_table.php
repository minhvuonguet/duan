<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePCongTacSVsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_cong_tac_sv', function (Blueprint $table) {
          $table->engine = 'InnoDB';

          $table->increments('id_cong_tac_sv');
          $table->integer('point_cong_tac_sv');
          $table->integer('mssv');
          $table->string('note');
       //   $table->primary('id_cong_tac_sv');

          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('p_cong_tac_sv');
    }
}
