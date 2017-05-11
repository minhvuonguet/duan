<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSinhViensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sinh_vien', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->integer('mssv')->primary()->unique();
            $table->string('fullname');
            $table->string('class');
            $table->string('office');
            $table->string('email');
            $table->string('chuc_vu');
            $table->date('birthday');
            $table->string('khen_thuong');
//            $table->string('trung_binh');
//            $table->string('tich_luy');
//            $table->string('xep_loai');
//            $table->string('mon_vi_pham');
//            $table->date('ngay_vp');
//            $table->string('de_tai');
//            $table->string('giai_thuong');
//            $table->string('vi_pham_shl');


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
        Schema::drop('sinh_vien');
    }
}
