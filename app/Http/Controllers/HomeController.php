<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Form_Diem;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function goStudents(Request $request){
        $data = Form_Diem::all();
        $user= $request->session()->get('user');

    }

    public function goToHome(Request $request)
    {
        $user= $request->session()->get('user');
        $sinhvien = $request->session()->get('sinhvien');
        switch ($user->id_role) {
            case '4':
                return view('layouts.admin')->With([
                    'user' => $user,
                    'sinhvien' => $sinhvien
                ]);
                break;
            case '3':
                $data = Form_Diem::all();
                return View('layouts.admin')->With([
                    'data' => $data,
                    'user' => $user,
                    'sinhvien' => $sinhvien
                ]);
                break;
            case '2':
                switch ($user->username) {
                    case 'phongdaotao':
                        return view('layouts.admin')->With([
                            'user' => $user,
                            'sinhvien' => $sinhvien
                        ]);
                        break;
                    case 'phongkhcn':
                        return view('layouts.admin')->With([
                            'user' => $user,
                            'sinhvien' => $sinhvien
                        ]);
                        break;
                    case 'vanphongdoan':
                        return view('layouts.admin')->With([
                            'user' => $user,
                            'sinhvien' => $sinhvien
                        ]);
                        break;
                    case 'vanphongkhoa':
                        return view('layouts.admin')->With([
                            'user' => $user,
                            'sinhvien' => $sinhvien
                        ]);
                        break;
                }
                break;
            case '1':
                return view('layouts.admin')->With([
                    'user' => $user,
                    'sinhvien' => $sinhvien
                ]);
                break;
            default:
                return redirect()->route('login');
                break;
        }
    }
}
