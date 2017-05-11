<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P_Khoa_Hoc_CN extends Model
{
    protected $table = 'p_khoa_hoc_cn';
    protected $primaryKey = 'id_khoa_hoc_cn';
    protected $fillable = ['point_khoa_hoc_cn','mssv' ,'fullname','class','note'];

    public static function getTableName() {
        return with(new static)->getTable();
    }
}
