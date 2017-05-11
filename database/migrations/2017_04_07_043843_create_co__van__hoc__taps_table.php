<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoVanHocTapsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('co_van_hoc_tap', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id_co_van_hoc_tap');
            $table->integer('point_co_van_hoc_tap');
            $table->integer('mssv');
            $table->string('note');
        //    $table->primary('id_co_van_hoc_tap');
            $table->foreign('mssv')
            ->references('mssv')
            ->on('users')
            ->onDelete('cascade')
            ->onUpdate('cascade');
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
        Schema::drop('co_van_hoc_tap');
    }
}
