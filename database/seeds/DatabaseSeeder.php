<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->call(HocKyTableSeeder::class);
        $this->call(SinhVienTableSeeder::class);
        $this->call(RolesTableSeeder::class);

        $this->call(UserTableSeeder::class);

        $this->call(PKhoaHocCNTableSeeder::class);
        $this->call(PDoanTableSeeder::class);
        $this->call(PKhoaTableSeeder::class);
        $this->call(PDaoTaoTableSeeder::class);
        $this->call(PCongTacSVTableSeeder::class);
        $this->call(CoVanHocTapTableSeeder::class);

        $this->call(PointsTableSeeder::class);
        $this->call(FormDiemSeeder::class);
        Model::reguard();
    }
}
