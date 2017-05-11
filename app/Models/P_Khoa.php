<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P_Khoa extends Model
{
    protected $table = 'p_khoa';
    protected $primaryKey = 'id_khoa';
    protected $fillable = ['point_khoa','mssv','fullname','class','vi_pham_sh_khoa'];

    public static function getTableName() {
        return with(new static)->getTable();
    }



}
