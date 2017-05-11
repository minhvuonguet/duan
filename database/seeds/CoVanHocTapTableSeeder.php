<?php

use Illuminate\Database\Seeder;
use App\Models\Co_Van_Hoc_Tap;
class CoVanHocTapTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Co_Van_Hoc_Tap::create([
            'point_co_van_hoc_tap' =>10,
            'mssv' => 13000001,

        ]);
        Co_Van_Hoc_Tap::create([
            'point_co_van_hoc_tap' =>5,
            'mssv' => 13000002,

        ]);
    }
}
