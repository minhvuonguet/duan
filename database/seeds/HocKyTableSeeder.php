<?php

use Illuminate\Database\Seeder;
use App\Models\Hoc_Ky;

class HocKyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hoc_Ky::create([
            'id_hoc_ky'=>1020162017,
            'note'=> "học kỳ I 2016 2017",
            'term_present'=>1
        ]);
        Hoc_Ky::create([
            'id_hoc_ky'=>2020162017,
            'note'=> "học kỳ II 2016 2017",
            'term_present'=>0
        ]);
        Hoc_Ky::create([
            'id_hoc_ky'=>1120162017,
            'note'=> "học kỳ I phụ 2016 2017",
            'term_present'=>0
        ]);
    }
}
