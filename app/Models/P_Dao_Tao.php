<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P_Dao_Tao extends Model
{
    protected $table = 'p_dao_tao';
    protected $primaryKey = 'id_dao_tao';
    protected $fillable = ['point_dao_tao','mssv','fullname','class','trung_binh','tich_luy','xep_loai','canh_bao_hv'

            ,'mon_vi_pham','ngay_vp'
    ];

    public static function getTableName() {
        return with(new static)->getTable();
    }
}
