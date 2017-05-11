<?php

use Illuminate\Database\Seeder;
use App\Models\P_Dao_Tao;
class PDaoTaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        P_Dao_Tao::create([
            'point_dao_tao' =>0,
            'mssv' => 13000003,
            'trung_binh' => '2.0',
            'tich_luy' => '2.0',
            'xep_loai' => 'TB',
        ]);
        P_Dao_Tao::create([
            'point_dao_tao' =>5,
            'mssv' => 13000004,
            'trung_binh' => '2.0',
            'tich_luy' => '2.0',
            'xep_loai' => 'TB',
        ]);
    }
}
