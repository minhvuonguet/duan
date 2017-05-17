<?php
/**
 * Created by PhpStorm.
 * User: lv2x
 * Date: 20/03/2017
 * Time: 20:36
 */

namespace App\Http\Controllers;

use App\Models\Co_Van_Hoc_Tap;
use App\Models\P_Dao_Tao;
use App\Models\Points;
use App\Models\Sinh_Vien;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use App\Models\User_Point;
use Illuminate\Support\Facades\DB;
use App\Models\Form_Diem;
use App\Models\Hoc_Ky;

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

    public function sv_detail ($id) {
        $term_present = Hoc_Ky::all();

        $ma_hk = Hoc_Ky::where('id_hoc_ky','=',  $id)->get();
        $id_hk = $ma_hk[0]->id_hoc_ky;
        $data = Points::where('mssv','=',  Auth::user()->mssv)->get();

        $data_covan = Co_Van_Hoc_Tap::where('mssv', '=', Auth::user()->mssv)->get();
        $data_daotao = P_Dao_Tao::where('mssv', '=', Auth::user()->mssv)->get();

        $dataTerm = Form_Diem::where('ma_hk','=',  $id_hk)->get();


        //  echo $data;
        return View('students.diem')->with([
            'students'=>$data[0],
            'covan'=>$data_covan[0]->point_co_van_hoc_tap,
//            'daotao'=>$data_daotao,
            'terms'=>$dataTerm[0]
        ]);
    }

    public function delete_student ($id) {

        if(Auth::user()->username == 'admin1' || Auth::user()->username == 'phongctsv' ){
            $id_students = Sinh_Vien::find($id);
            $id_students->delete();

            return $id;
        }
    }

}