<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Co_Van_Hoc_Tap extends Model
{
    protected $table = 'co_van_hoc_tap';
    protected $primaryKey = 'id_co_van_hoc_tap';
    protected $fillable = ['point_co_van_hoc_tap','mssv','note'];

    public static function getTableName() {
        return with(new static)->getTable();
    }

}
