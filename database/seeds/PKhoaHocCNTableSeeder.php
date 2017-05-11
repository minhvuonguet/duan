<?php

use Illuminate\Database\Seeder;
use App\Models\P_Khoa_Hoc_CN;
class PKhoaHocCNTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        P_Khoa_Hoc_CN::create([
            'point_khoa_hoc_cn' =>5,
            'mssv' => 13000001,

        ]);
        P_Khoa_Hoc_CN::create([
            'point_khoa_hoc_cn' =>10,
            'mssv' => 13000002,

        ]);
    }
}
