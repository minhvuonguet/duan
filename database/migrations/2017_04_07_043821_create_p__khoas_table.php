<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePKhoasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_khoa', function (Blueprint $table) {
          $table->engine = 'InnoDB';

            $table->increments('id_p_khoa');
            $table->integer('point_khoa');
            $table->integer('mssv');
            $table->string('fullname');
            $table->string('class');
            $table->string('vi_pham_sh_khoa');
       //     $table->primary('id_p_khoa');
//            $table->foreign('mssv')
//            ->references('mssv')
//            ->on('users')
//            ->onDelete('cascade')
//            ->onUpdate('cascade');
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
        Schema::drop('p_khoa');
    }
}
