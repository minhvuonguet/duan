<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Form_Diem extends Model
{
    protected $table = 'form_diem';
   
    protected $fillable = [
            'tong_hoc_tap',
            'tru_hoc_luc_yeu',
            'tru_canh_bao_hoc_vu',
            'tru_khong_du_tin_chi',
            'tru_ngien_cuu_kh',
            'tru_khong_thi',
            
            'tru_khien_trach_thi',
            'tru_canh_cao_thi',
            'tru_dinh_chi_thi',

            // 2. ý thức và kết quả chấp hành nội quy,quy chế trong nhà trường
            'tong_chap_hanh',
            'tru_nop_hoc_phi',
            'tru_dang_ky_hoc_qua_han',
            'tru_khong_di_trieu_tap',
            'tru_tra_qua_han_ho_so',
            'tru_khong_tham_gia_bao_hiem',
            'tru_vi_pham_cu_tru',
           
            'tru_phe_binh',
            'tru_khien_trach',
            'tru_canh_cao',

            // 3. ý thức và kết quả tham gia hoạt động chínht trị xã hội văn hoá, văn nghệ...
            'tong_tham_gia',
            'cong_tham_gia_truong',
            'cong_tham_gia_ngoai',
            'tru_khong_tham_gia',
           
           // 4. phẩm chất công dân và quan hệ cộng đồng
            'tong_pham_chat',
            'tru_khong_chap_hanh',
            'tru_khong_tinh_than',

            //5.  ý thức và kết quả tham gia công tác phụ trách lớp, đoàn thể...
            'tong_cong_tac',
            'cong_giu_chuc_vu',
            'cong_hoc_luc',
            'cong_tham_gia_thi_chuyen_mon',
            'cong_nckh',
            'cong_dat_giai',
            'cong_ket_nap_dang',
    ];

}
