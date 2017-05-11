<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Points extends Model
{
  protected $table = 'points';
  protected $primaryKey = 'id_point';

   protected $fillable = [
       'mssv', 'id_hoc_ky', 'point_total', 'point_cong_tac_sv',
       'point_khoa_hoc_cn', 'point_khoa_hoc_cn',
       'point_dao_tao','point_doan',
       'point_khoa', 'point_co_van_hoc_tap'
   ];

    public static function getTableName() {
        return with(new static)->getTable();
    }
}
