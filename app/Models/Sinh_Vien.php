<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sinh_Vien extends Model
{
    protected $table = 'sinh_vien';
    protected $primaryKey = 'mssv';

//    protected $fillable = [
//       'mssv', 'fullname','class', 'office','email','chuc_vu','birthday','khen_thuong','trung_binh',
//        'tich_luy','xep_loai','mon_vi_pham','ngay_vp','de_tai','giai_thuong','vi_pham_shl'
//    ];
    protected $fillable = [
        'mssv', 'fullname','class', 'office','email','chuc_vu','birthday','khen_thuong'
    ];

    public static function getTableName() {
        return with(new static)->getTable();
    }
}
