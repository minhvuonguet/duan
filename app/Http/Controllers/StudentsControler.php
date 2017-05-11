<?php
/**
 * Created by PhpStorm.
 * User: lv2x
 * Date: 20/03/2017
 * Time: 20:36
 */

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Models\User_Point;
use Illuminate\Support\Facades\DB;
use App\Models\Form_Diem;


class StudentsControler extends Controller {
    public function ViewUser(Request $request) {
        $data = Form_Diem::all();
        $user= $request->session()->get('user');
        $sinhvien = $request->session()->get('sinhvien');
        return View('Employee.indexStudents')->With([
            'data' => $data,
            'user' => $user,
            'sinhvien' => $sinhvien
        ]);
    }

    public function account(Request $request){
        $user= $request->session()->get('user');
        $sinhvien = $request->session()->get('sinhvien');
        return View('Employee.account')->With([
            'user' => $user,
            'sinhvien' => $sinhvien
        ]);
    }

    public function report(Request $request){
        $user= $request->session()->get('user');
        $sinhvien = $request->session()->get('sinhvien');
        
        return view('Employee.report')->with([
            'user' => $user,
            'sinhvien' => $sinhvien
            ]);
    }

    

    public function getMauDiem () {
        $ad_us = User::find(Auth::user()->id);

        $data = User_Point::all();
        $size = count($data);

        $dataStudents = null;
        for($i = 0; $i < $size; $i++){
            if($data[$i]['mssv'] == $ad_us->mssv){
                $dataStudents = $data[$i];
                break;
            }
        }

        return view ('Employee.mau_diem')->with(['sum_point' => $ad_us->diem_ren_luyen]);
    }
}