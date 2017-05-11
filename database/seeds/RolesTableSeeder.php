<?php

use Illuminate\Database\Seeder;
use App\Models\Roles;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Roles::create([
          'id_role'=> 1,
          'name' =>'Administrator'
        ]);

        Roles::create([
          'id_role'=> 2,
          'name' =>'ctsv'
        ]);

        Roles::create([
          'id_role'=> 3,
          'name' =>'Member'
        ]);


        Roles::create([
            'id_role'=> 4,
            'name' =>'covanhoctap'

        ]);
    }
}
