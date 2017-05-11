<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreatePDoansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_doan', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_doan');
            $table->integer('point_doan');
            $table->integer('mssv');
            $table->string('fullname');
            $table->string('class');
            $table->string('tham_gia');
            $table->string('dang_vien');
            $table->string('khen_thuong_doan');
            $table->string('vi_pham_doan');
            
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
        Schema::drop('p_doan');
    }
}