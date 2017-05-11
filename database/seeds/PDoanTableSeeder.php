<?php

use Illuminate\Database\Seeder;
use App\Models\P_Doan;
class PDoanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        P_Doan::create([
            'point_doan' =>5,

            'mssv' => 13000003,

        ]);
        P_Doan::create([
            'point_doan' =>0,
            'mssv' => 13000004,

        ]);
        P_Doan::create([
            'point_doan' =>10,
            'mssv' => 13000005,

        ]);

    }
}
