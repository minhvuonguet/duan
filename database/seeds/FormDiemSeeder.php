<?php

use Illuminate\Database\Seeder;
use App\Models\Form_Diem;

class FormDiemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         /* Ý thức và kết quả học tập, nghiên cứu khoa học */
         Form_Diem::create([
            'ma_hk' => 2020162017,
            'tong_hoc_tap' => 20,
            'tru_hoc_luc_yeu' => -3,
            'tru_canh_bao_hoc_vu' => -5,
            'tru_khong_du_tin_chi' => -5,
            'tru_ngien_cuu_kh' => -5,
            'tru_khong_thi' => -2,
            
            'tru_khien_trach_thi'  =>  '-25%' ,
            'tru_canh_cao_thi' => '-50%' ,
            'tru_dinh_chi_thi'  => '-100%',

            // 2. ý thức và kết quả chấp hành nội quy,quy chế trong nhà trường
            'tong_chap_hanh'  => 25,
            'tru_nop_hoc_phi'  => -5,
            'tru_dang_ky_hoc_qua_han' => -2,
            'tru_khong_di_trieu_tap' => -5,
            'tru_tra_qua_han_ho_so' => -5,
            'tru_khong_tham_gia_bao_hiem' => -5,
            'tru_vi_pham_cu_tru' => -10,
           
            'tru_phe_binh' => '-25%',
            'tru_khien_trach' => '-50%',
            'tru_canh_cao'  => '-100%',

            // 3. ý thức và kết quả tham gia hoạt động chínht trị xã hội văn hoá, văn nghệ...
            'tong_tham_gia' => 0,
            'cong_tham_gia_truong' => 10,
            'cong_tham_gia_ngoai'  => 2,
            'tru_khong_tham_gia' => -2,
           
           // 4. phẩm chất công dân và quan hệ cộng đồng
            'tong_pham_chat' => 25,
            'tru_khong_chap_hanh' => -5,
            'tru_khong_tinh_than' => -5,

            //5.  ý thức và kết quả tham gia công tác phụ trách lớp, đoàn thể...
            'tong_cong_tac' => 0,
            'cong_giu_chuc_vu' => 10,
            'cong_hoc_luc' => 10,
            'cong_tham_gia_thi_chuyen_mon' => 5,
            'cong_nckh' => 5,
            'cong_dat_giai' => 5,
            'cong_ket_nap_dang' => 10,
         ]);
    }
}
