<?php

use Illuminate\Database\Seeder;
use App\Models\Sinh_Vien;

class SinhVienTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // DB::table('sinh_vien')->truncate();
        Sinh_Vien::create([
          'mssv' => 0,
          'fullname' => 'Admin',
          'class' => 'Admin',
          'office' => 'Admin',
          'email' => 'admin@gmail.com',
        ]);
         Sinh_Vien::create([
          'mssv' => 1,
          'fullname' => 'Phòng CTSV',
          'class' => 'Phòng CTSV',
          'office' => 'Phòng CTSV',
          'email' => 'phongctsv@gmail.com',
        ]);
        Sinh_Vien::create([
          'mssv' => 2,
          'fullname' => 'Phòng đào tạo',
          'class' => 'Phòng đào tạo',
          'office' => 'Phòng đào tạo',
          'email' => 'phongdaotao@gmail.com',
        ]);
       Sinh_Vien::create([
          'mssv' => 3,
          'fullname' => 'Phòng KHCN',
          'class' => 'Phòng KHCN',
          'office' => 'Phòng KHCN',
          'email' => 'phongkhcn@gmail.com'
        ]);
        Sinh_Vien::create([
          'mssv' => 4,
          'fullname' => 'Văn phòng đoàn',
          'class' => 'Văn phòng đoàn',
          'office' => 'Văn phòng đoàn',
          'email' => 'vanphongdoan@gmail.com',
        ]);
        Sinh_Vien::create([
            'mssv' => 5,
            'fullname' => 'Văn phòng khoa',
            'class' => 'Văn phòng khoa',
            'office' => 'Văn phòng khoa',
            'email' => 'vanphongkhoa@gmail.com',
        ]);
        Sinh_Vien::create([
          'mssv' => 6,
          'fullname' => 'Cố vấn học tập k59CC',
          'class' => 'Cố vấn học tập',
          'office' => 'Cố vấn học tập',
          'email' => 'covanhoctap@gmail.com',
        ]);
        Sinh_Vien::create([
          'mssv' => 7,
          'fullname' => 'Cố vấn học tập k58CC',
          'class' => 'Cố vấn học tập',
          'office' => 'Cố vấn học tập',
          'email' => 'covanhoctap@gmail.com',
        ]);
        Sinh_Vien::create([
          'mssv' => 13000000,
          'fullname' => 'Sinh viên test',
          'class' => 'K58CC',
          'office' => 'Học Sinh',
          'email' => 'sinhvien@gmail.com',
        ]);
        Sinh_Vien::create([
            'mssv' => 13000001,
            'fullname' => 'Sinh viên test1',
            'class' => 'K58CC',
            'office' => 'Học Sinh',
            'email' => 'sinhvien@gmail.com',
        ]);
        Sinh_Vien::create([
            'mssv' => 13000002,
            'fullname' => 'Sinh viên test2',
            'class' => 'K58CC',
            'office' => 'Học Sinh',
            'email' => 'sinhvien@gmail.com',
        ]);
        Sinh_Vien::create([
            'mssv' => 13000003,
            'fullname' => 'Sinh viên test3',
            'class' => 'K58CC',
            'office' => 'Học Sinh',
            'email' => 'sinhvien@gmail.com',
        ]);
        Sinh_Vien::create([
            'mssv' => 13020553,
            'fullname' => 'Đăng Danh Phương',
            'class' => 'K58CC',
            'office' => 'Học Sinh',
            'email' => 'yanglong.ph@gmail.com',
        ]);
    }
}
