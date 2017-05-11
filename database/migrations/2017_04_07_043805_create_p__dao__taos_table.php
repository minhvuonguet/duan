<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePDaoTaosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_dao_tao', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id_dao_tao');
          $table->integer('point_dao_tao');
          $table->integer('mssv');
            $table->string('fullname');
            $table->string('class');
          $table->string('trung_binh');
          $table->string('tich_luy');
          $table->string('xep_loai');
          $table->string('canh_bao_hv');
            $table->string('mon_vi_pham');
            $table->string('ngay_vp');
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
        Schema::drop('p_dao_tao');
    }
}
