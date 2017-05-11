<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePKhoaHocCNsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_khoa_hoc_cn', function (Blueprint $table) {
          $table->engine = 'InnoDB';

          $table->increments('id_khoa_hoc_cn');
          $table->integer('point_khoa_hoc_cn');
          $table->integer('mssv');
            $table->string('fullname');
            $table->string('class');
          $table->string('note');
     //     $table->primary('id_khoa_hoc_cn');
//          $table->foreign('mssv')
//          ->references('mssv')
//          ->on('users')
//          ->onDelete('cascade')
//          ->onUpdate('cascade');
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
        Schema::drop('p_khoa_hoc_cn');
    }
}
