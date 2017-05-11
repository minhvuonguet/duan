<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePointsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('points', function (Blueprint $table) {
          $table->engine = 'InnoDB';
          $table->increments('id_point')->unique();//ma so diem sinh vien trong tung hoc ky
          $table->integer('mssv');//ma so sinh vien
          $table->integer('id_hoc_ky');//ma so hoc ky
          $table->integer('point_total');//diem tong
          $table->integer('point_khoa_hoc_cn');//nghien cuu khoa hoc
          $table->integer('point_cong_tac_sv');//y thuc sinh vien
          $table->integer('point_dao_tao');//hoat dong doan the
          $table->integer('point_doan');//y thuc cong dan
          $table->integer('point_khoa');//y thuc cong dan
          $table->integer('point_co_van_hoc_tap');//y thuc cong dan
          $table->timestamps();
    //      $table->primary('id_point');
          $table->foreign('mssv')
          ->references('mssv')
          ->on('sinh_vien')
          ->onDelete('cascade')
          ->onUpdate('cascade');
          $table->foreign('id_hoc_ky')
          ->references('id_hoc_ky')
          ->on('hoc_ky')
          ->onDelete('cascade')
          ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('points');
    }
}
