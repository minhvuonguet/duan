@extends('layouts.admin')
@section('title',' List Admin')
@section('content')
<style>
    .newClass {
        margin-top: 50px;
    }
    p {
        padding : 10px;
    }
</style>
<div class="newClass">
    <form action="postnewclass" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <input type="hidden" name="_token" value="{{ csrf_token() }}" />
        <div class="form-group col-md-8 col-md-offset-2">
            <div class="col-md-12 form-group">
                <div class="col-md-12">
                    <h1> Thêm mới danh sách </h1>
                </div>
            </div>
            <div class="form-group col-md-12">
                <div class="col-md-4">
                    <p>Chọn tải lên</p>
                </div>
                <div class="col-sm-8">
                    <select name="type_file " class="form-control ">
                        @if(Auth::user()->username == 'admin1'|| Auth::user()->username == 'phongctsv'))
                        <option selected value="list_class" > Danh sách lớp</option>

                        <option value="list_ad_class"> Danh sách cán bộ lớp</option>
                        <option value="list_ad_vi_pham_ytcn"> Danh Sách Sinh viên vi phạm ý thức công dân </option>
                        <option value="list_ad_class_khen_thuong"> Khen Thưởng </option>
                        <option value="list_ad_class_nop_cham_hoc_phi"> Danh sách Nộp Chậm Học Phí </option>
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

                        @if(Auth::user()->username == 'phongkhcn'))

                        <option value="list_nghien_cuu_khoa_hoc"> Nghiên Cứu Khoa Học </option>

                        @endif


                        @if(Auth::user()->username == 'phongdaotao'))
                        <option value="list_ad_class_bang_diem"> Kết Quả Học Tập </option>
                        <option value="list_vi_pham_quyche_thi"> Vi Phạm Quy Chế Thi </option>
                        <option value="list_ad_canh_bao_hv"> Cảnh Báo Học Vụ </option>
                        @endif
                        @if(Auth::user()->id_role == 4))
                        <option value="danh_sach_sh_lop"> SV Không tham gia sinh hoạt lớp </option>
                        @endif
                    </select>
                </div>
            </div>

            <div class="form-group col-md-12">
                <div class="col-md-4">
                    <p>Tải lên file Excell</p>
                </div>
                <div class="col-sm-8">
                    <input type="file" class="form-control" id="fileExcels">
                </div>
            </div>


            <div class="form-group col-md-12">
                <div class="col-md-12">
                    <button class="btn btn-primary col-md-12" type="submit">Tải lên</button>
                </div>
            </div>
            {{--<input type="file" name="fileExcels" id="getEx"></br>--}}

        </div>

    </form>


</div>

@stop
