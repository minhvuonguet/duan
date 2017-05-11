<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class P_Cong_Tac_SV extends Model
{
    protected $table = 'p_cong_tac_sv';
    protected $primaryKey = 'id_cong_tac_sv';
    protected $fillable = ['point_cong_tac_sv','mssv','note'];

    public static function getTableName() {
        return with(new static)->getTable();
    }
}
