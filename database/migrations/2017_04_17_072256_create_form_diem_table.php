<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFormDiemTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('form_diem', function (Blueprint $table) {
            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->string('ma_hk');
            /* Ý thức và kết quả học tập, nghiên cứu khoa học */
            $table->integer('tong_hoc_tap');
            $table->integer('tru_hoc_luc_yeu');
            $table->integer('tru_canh_bao_hoc_vu');
            $table->integer('tru_khong_du_tin_chi');
            $table->integer('tru_ngien_cuu_kh');
            $table->integer('tru_khong_thi');
            
            $table->integer('tru_khien_trach_thi');
            $table->integer('tru_canh_cao_thi');
            $table->integer('tru_dinh_chi_thi');

            // 2. ý thức và kết quả chấp hành nội quy,quy chế trong nhà trường
            $table->integer('tong_chap_hanh');
            $table->integer('tru_nop_hoc_phi');
            $table->integer('tru_dang_ky_hoc_qua_han');
            $table->integer('tru_khong_di_trieu_tap');
            $table->integer('tru_tra_qua_han_ho_so');
            $table->integer('tru_khong_tham_gia_bao_hiem');
            $table->integer('tru_vi_pham_cu_tru');
           
            $table->integer('tru_phe_binh');
            $table->integer('tru_khien_trach');
            $table->integer('tru_canh_cao');

            // 3. ý thức và kết quả tham gia hoạt động chínht trị xã hội văn hoá, văn nghệ...
            $table->integer('tong_tham_gia');
            $table->integer('cong_tham_gia_truong');
            $table->integer('cong_tham_gia_ngoai'); 
            $table->integer('tru_khong_tham_gia');
           
           // 4. phẩm chất công dân và quan hệ cộng đồng
            $table->integer('tong_pham_chat');
            $table->integer('tru_khong_chap_hanh');
            $table->integer('tru_khong_tinh_than');

            //5.  ý thức và kết quả tham gia công tác phụ trách lớp, đoàn thể...
            $table->integer('tong_cong_tac');
            $table->integer('cong_giu_chuc_vu');
            $table->integer('cong_hoc_luc'); 
            $table->integer('cong_tham_gia_thi_chuyen_mon');
            $table->integer('cong_nckh');
            $table->integer('cong_dat_giai');
            $table->integer('cong_ket_nap_dang');

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
        Schema::drop('form_diem');
    }
}
