<?php
/**
 * Created by PhpStorm.
 * User: lv2x
 * Date: 19/05/2017
 * Time: 03:16
 */

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Feedback  extends Model
{
    protected $table = 'feedback';
    protected $fillable = ['mssv', 'noidung', 'diemtru',  'lydo'];
}