<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Models\Co_Van_Hoc_Tap;
use App\Models\Hoc_Ky;
use App\Models\P_Cong_Tac_SV;
use App\Models\P_Dao_Tao;
use App\Models\P_Doan;
use App\Models\P_Khoa_Hoc_CN;
use App\Models\P_Khoa;
use App\Models\Points;
use App\Models\Sinh_Vien;
use App\Models\Form_Diem;


class CacularPoint extends Controller
{
    public $defaultPoint = 100;

    public function CaculPoint ($subPoint) {

        return 0;
    }
    public function tinhdiem () {
        $covan = new Co_Van_Hoc_Tap();

        $P_ctsv = new P_Cong_Tac_SV();
        $P_daotao = new P_Dao_Tao();
        $P_doan = new P_Doan();
        $P_khcn = new P_Khoa_Hoc_CN();
        $P_khoa = new P_Khoa();

        $this->diem($covan, 'covan');
        $this->diem($P_ctsv, 'ctsv');
        $this->diem($P_daotao,'daotao');
        $this->diem($P_doan, 'doan');
        $this->diem($P_khcn, 'khcn');
        $this->diem($P_khoa, 'khoa');

     //   return Redirect()->route('listclass');
    }
    public function diem ($table, $type) {
        // neu khong co thi ghi vao dong moi. neu co roi thi update.
        $hocky = Hoc_Ky::all();
        $present_term = Hoc_Ky::where('term_present','=',  '1')->get();
        echo $present_term;
        $Point = new Points();
        $instanceTable = $table::all();

        switch ($type) {
            case "covan" :
                for($i = 0; $i < count($instanceTable); $i++) {
                    $Point::updateOrCreate(
                        [
                            'mssv'=>$instanceTable[$i]->mssv,
                            'id_hoc_ky' => $present_term[0]->id_hoc_ky,
                        ],
                        [
                            'id_hoc_ky' => $present_term[0]->id_hoc_ky,
                            'point_co_van_hoc_tap' => $instanceTable[$i]->point_co_van_hoc_tap,
                        ]
                    );
                }
                break;
            case "ctsv" :

                for($i = 0; $i < count($instanceTable); $i++) {

                    echo ($instanceTable[$i]->mssv);
                    $Point::updateOrCreate(
                        [
                            'mssv'=>$instanceTable[$i]->mssv,
                            'id_hoc_ky' => $present_term[0]->id_hoc_ky,
                        ],
                        [
                            'id_hoc_ky' => $present_term[0]->id_hoc_ky,
                            'point_cong_tac_sv' =>  $instanceTable[$i]->point_cong_tac_sv,
                        ]
                    );
                    echo $instanceTable[$i]->point_cong_tac_sv;
                }
                break;
            case "daotao" :
                for($i = 0; $i < count($instanceTable); $i++) {
                    $Point::updateOrCreate(
                        [
                            'mssv'=>$instanceTable[$i]->mssv,
                            'id_hoc_ky' => $present_term[0]->id_hoc_ky,
                        ],
                        [
                            'id_hoc_ky' => $present_term[0]->id_hoc_ky,
                            'point_dao_tao' => $instanceTable[$i]->point_dao_tao,
                        ]
                    );
                }
                break;
            case "doan" :
                for($i = 0; $i < count($instanceTable); $i++) {

                    $Point::updateOrCreate(
                        [
                            'mssv'=>$instanceTable[$i]->mssv,
                            'id_hoc_ky' => $present_term[0]->id_hoc_ky,
                        ],
                        [
                            'id_hoc_ky' => $present_term[0]->id_hoc_ky,
                            'point_doan' => $instanceTable[$i]->point_doan,

                        ]
                    );
                }
                break;
            case "khcn" :
                for($i = 0; $i < count($instanceTable); $i++) {

                    $Point::updateOrCreate(
                        [
                            'mssv'=>$instanceTable[$i]->mssv,
                            'id_hoc_ky' => $present_term[0]->id_hoc_ky,
                        ],
                        [
                            'id_hoc_ky' => $present_term[0]->id_hoc_ky,
                            'point_khoa_hoc_cn' => $instanceTable[$i]->point_khoa_hoc_cn,

                        ]
                    );
                }
                break;
            case "khoa" :
                for($i = 0; $i < count($instanceTable); $i++) {

                    $Point::updateOrCreate(
                        [
                            'mssv'=>$instanceTable[$i]->mssv,
                            'id_hoc_ky' => $hocky[0]->id_hoc_ky,
                        ],
                        [
                            'id_hoc_ky' => $hocky[0]->id_hoc_ky,
                            'point_khoa' => $instanceTable[$i]->point_khoa,
                        ]
                    );
                }
                break;
        }
        // tinh lai diem tong.

        $instancePoint = Points::all();
        for($i = 0; $i < count($instancePoint); $i++) {
            $total_point = 0;
         //   echo ($instancePoint[$i]->point_total );
            $total_point =
                $instancePoint[$i]->point_total +
                $instancePoint[$i]->point_co_van_hoc_tap +
                $instancePoint[$i]->point_cong_tac_sv +
                $instancePoint[$i]->point_dao_tao +
                $instancePoint[$i]->point_doan +
                $instancePoint[$i]->point_khoa_hoc_cn +
                $instancePoint[$i]->point_khoa ;
          //  echo $total_point;
//            if($total_point > 100)
//                $total_point = 100;
            $Point::updateOrCreate(
                [
                    'mssv'=>$instancePoint[$i]->mssv,
                ],
                [
                 'point_total'=>$total_point
                ]
            );
            $total_point = 0;
        }

    }


}
