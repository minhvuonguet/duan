<?php
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'username'=>'admin1',
            'password'=>Hash::make('admin1'),
            'email'=>'Administartor@gmail.com',
            'mssv' => 0,
            'avatar' => 0,
            'id_role'=>1
        ]);
        User::create([
            'username'=>'phongctsv',
            'password'=>Hash::make('phongctsv'),
            'email'=>'phongctsv@gmail.com',
            'mssv' => 1,
            'avatar' => 1,
            'id_role'=>1,
        ]);


        User::create([
            'username'=>'phongdaotao',
            'password'=>Hash::make('phongdaotao'),
            'email'=>'phongdaotao@gmail.com',
            'mssv' => 2,
            'avatar' => 2,
            'id_role'=>2
        ]);
        User::create([
            'username'=>'phongkhcn',
            'password'=>Hash::make('phongkhcn'),
            'email'=>'khoahoccongnghe@gmail.com',
            'mssv' => 3,
            'avatar' => 3,
            'id_role'=>2
        ]);
        User::create([
            'username'=>'vanphongdoan',
            'password'=>Hash::make('vanphongdoan'),
            'email'=>'vanphongdoan@gmail.com',
            'mssv' => 4,
            'avatar' => 4,
            'id_role'=>2
        ]);
        User::create([
            'username'=>'vanphongkhoa',
            'password'=>Hash::make('vanphongkhoa'),
            'email'=>'vanphongkhoa@gmail.com',
            'mssv' => 5,
            'avatar' => 5,
            'id_role'=>2
        ]);

        User::create([
            'username'=>'covank59cc',
            'password'=>Hash::make('covank59cc'),
            'email'=>'covank59cc@gmail.com',
            'mssv' => 6,
            'avatar' => 6,
            'id_role'=>4,
        ]);

        User::create([
            'username'=>'covank58cc',
            'password'=>Hash::make('covank58cc'),
            'email'=>'covank58cc@gmail.com',
            'mssv' => 7,
            'avatar' => 7,
            'id_role'=>4,
        ]);
        User::create([
            'username'=>'students0',
            'password'=>Hash::make('students0'),
            'mssv' => 13000000,
            'avatar' => 13000000,
            'id_role'=>3
        ]);
        User::create([
            'username'=>'students1',
            'password'=>Hash::make('students1'),
            'mssv' => 13000001,
            'avatar' => 13000001,
            'id_role'=>3
        ]);
        User::create([
            'username'=>'students2',
            'password'=>Hash::make('students2'),
            'mssv' => 13000002,
            'avatar' => 13000002,
            'id_role'=>3
        ]);
        User::create([
            'username'=>'students3',
            'password'=>Hash::make('students3'),
            'mssv' => 13000003,
            'avatar' => 13000003,
            'id_role'=>3,
        ]);
        User::create([
            'username'=>'phuongdd_58',
            'password'=>Hash::make('phuongdd_58'),
            'mssv' => 13020553,
            'avatar' => 13020553,
            'id_role'=>3,
        ]);
    }
}
