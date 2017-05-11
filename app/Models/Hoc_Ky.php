<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Hoc_Ky extends Model
{
  protected $table = 'hoc_ky';
  protected $primaryKey = 'id_hoc_ky';

  protected $fillable = [
        'id_hoc_ky',
        'note'
  ];
  // protected $fillable = ['id_hoc_ky'];

  public function Hocky(){
      return $this->hasOne();
  }
}
