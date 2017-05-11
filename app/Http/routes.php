<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('Employee.indexStudents');

});


Route::get('/ctsv', function () {
    return view('');
});
Route::post('updateDB', ['as' => 'updateDB', 'uses' => 'DatabaseController@updateDB']);

Route::get('readExcels', ['as' => 'readExcels', 'uses' => 'DatabaseController@readExcels']);

Route::group(['middleware' => ['web']], function () {


    // admin va phong cong tac sinh vien

    Route::get('/login', ['as' => 'login', 'uses' => 'AdminControler@getLogin']);
    Route::post('/postLogin', ['as' => 'postLogin', 'uses' => 'AdminControler@postLogin']);
    Route::get('ViewUser', ['as' => 'ViewUser', 'uses' => 'AdminControler@ViewUser']);
    Route::get('sendmail', ['as' => 'sendmail', 'uses' => 'AdminControler@sendmail']);
    Route::post('/message/send', ['uses' => 'FrontController@addFeedback', 'as' => 'front.fb']);


    Route::group(['middleware' => 'auth'], function () {
     //   Route::get('/', ['as' => '/', 'uses' => 'AdminControler@ViewUser']);
        Route::get('list', ['as' => 'list', 'uses' => 'AdminControler@listUser']);
        Route::get('logout', ['as' => 'logout', 'uses' => 'AdminControler@getLogout']);
        Route::get('newterm', ['as' => 'newterm', 'uses' => 'AdminControler@newterm']);
        Route::post('postnewterm', ['as' => 'postnewterm', 'uses' => 'AdminControler@postnewterm']);

        Route::get('newclass', ['as' => 'newclass', 'uses' => 'AdminControler@newclass']);
        Route::post('postnewclass', ['as'=>'postnewclass','uses'=>'AdminControler@postnewclass']);
        Route::get('tinhdiem', ['as' => 'tinhdiem', 'uses' => 'CacularPoint@tinhdiem']);
        Route::post('update/{id}/{chu_de}', ['as'=>'update', 'uses'=>'AdminControler@updatePoint']);
        Route::get('listclass', ['as'=>'listclass', 'uses'=>'AdminControler@listclass']);
        Route::get('done_import', ['as'=>'done_import', 'uses'=>'AdminControler@list_sinh_vien']);

        Route::get('khenThuong.khen_thuong', ['as' => 'khenThuong.khen_thuong', 'uses' => 'covanController@khen_thuong']);

        Route::get('phongDaoTao.xem_diem', ['as' => 'phongDaoTao.xem_diem', 'uses' => 'DaoTaoController@xem_diem']);


        Route::get('doanvien', ['as'=>'doanvien', 'uses'=>'VPDoanController@demo']);

        Route::get('doanVien.khen_thuong', ['as'=>'doanVien.khen_thuong', 'uses'=>'VPDoanController@khen_thuong']);

        Route::get('coVanHocTap.listclass', ['as' => 'coVanHocTap.listclass', 'uses' => 'covanController@listclass']);

        Route::get('phongDaoTao.vi_pham_quyche', ['as' => 'phongDaoTao.vi_pham_quyche', 'uses' => 'DaoTaoController@vi_pham_quyche']);

        Route::get('phongkhcn.listclass', ['as' => 'phongkhcn.listclass', 'uses' => 'PhongkhcnController@listclass']);

        Route::get('vanPhongKhoa.xem_diem', ['as' => 'vanPhongKhoa.xem_diem', 'uses' => 'vanphongkhoa@xem_diem']);


        Route::post('listofclass/{class}', ['as'=>'listofclass', 'uses'=>'AdminControler@listofclass']);

        // Route work for term
        Route::post('change_present_term/{id}', ['as'=>'change_present_term', 'uses'=>'AdminControler@change_present_term']);
        Route::post('change_present_term/{id}', ['as'=>'change_present_term', 'uses'=>'AdminControler@change_present_term']);
        Route::post('delete_term/{id}', ['as'=>'delete_term', 'uses'=>'AdminControler@delete_term']);

        // Route form diem
        Route::get('formdiem', ['as' => 'formdiem', 'uses' => 'AdminControler@formdiem']);
        Route::post('list_of_form/{id}', ['as' => 'list_of_form', 'uses' => 'PhongCtsvController@listOfForm']);
    });

});


    // VPDoanController,hoat_dong_doan

