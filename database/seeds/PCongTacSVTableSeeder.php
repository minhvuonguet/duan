<?php

use Illuminate\Database\Seeder;
use App\Models\P_Cong_Tac_SV;
class PCongTacSVTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        P_Cong_Tac_SV::create([
            'point_cong_tac_sv' =>10,
            'mssv' => 13000003,

        ]);
        P_Cong_Tac_SV::create([
            'point_cong_tac_sv' =>0,
            'mssv' => 13000004,

        ]);
        P_Cong_Tac_SV::create([
            'point_cong_tac_sv' =>5,
            'mssv' => 13000005,

        ]);
    }
}
