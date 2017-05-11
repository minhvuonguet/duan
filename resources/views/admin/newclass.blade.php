@extends('layouts.admin')
@section('title',' List Admin')
@section('content')

<div class="newClass">
    <form action="postnewclass" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <h1> Thêm mới danh sách </h1>
        <select name="type_file">

            @if(Auth::user()->username == 'admin1'|| Auth::user()->username == 'phongctsv'))
                <option selected value="list_class" > Danh sách lớp</option>

                <option value="list_ad_class"> Danh sách cán bộ lớp</option>
                <option value="list_ad_vi_pham_ytcn"> Danh Sách Sinh viên vi phạm ý thức công dân </option>
                <option value="list_ad_class_khen_thuong"> Khen Thưởng </option>
            @endif

            @if(Auth::user()->username == 'vanphongdoan'))


             <option value="list_ad_class_tham_gia_hoatdong"> SV tham gia cac hd </option>
                <option value="list_ad_khen_thuong_doan"> SV khen thuong doan </option>
                <option value="list_ad_dang_vien"> Danh Sach Dang Vien </option>
                <option value="list_ad_vi_pham_doan"> Vi Pham SV Doan </option>

            @endif
            @if(Auth::user()->username == 'vanphongkhoa'))


                <option value="list_ad_class_vi_pham_khoa"> SV Vi Phạm cấp khoa </option>

            @endif

            @if(Auth::user()->username == 'khoahoccongnghe'))

                 <option value="list_nghien_cuu_khoa_hoc"> Nghiên Cứu Khoa Học </option>

            @endif


            @if(Auth::user()->username == 'phongdaotao'))
                <option value="list_ad_class_bang_diem"> Kết Quả Học Tập </option>
                <option value="list_vi_pham_quyche_thi"> Vi Phạm Quy Chế Thi </option>
                <option value="list_ad_canh_bao_hv"> Cảnh Báo Học Vụ </option>
            @endif




        </select>
        {{--<div class="form-group">--}}
            {{--<label for="classname">Tên lớp</label>--}}
            {{--<input type="text" class="form-control" id="classname" name="clasname" placeholder="Tên lớp">--}}
        {{--</div>--}}
        <div class="form-group">
            <label for="getEx">import excels</label>
            <input type="file" name="fileExcels" id="getEx"></br>
            <button type="submit">Import</button>
        </div>

    </form>


</div>

@stop
