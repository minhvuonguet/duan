@extends('layouts.admin')
@section('title',' List Admin')
@section('content')
    <div>
        {{--<form >--}}
            {{csrf_field()}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />

            <select name="hoc_ky" class="form-control select_hoc_ky" >
                @foreach($term_present as $term)
                    <option value="{{$term->id_hoc_ky}}" data="{{$term->note}}" > {{$term->note}} </option>
                @endforeach
            </select>
            <table class="table">
                {{--*/  $dem = 1 /*--}}
                @if(isset($covan) )

                    @foreach($covan as $value)
                        <tr>
                            <td>{{$dem}}</td>
                            <td>{{$value->mssv}}</td>
                            <td class="point">{{$value->point_co_van_hoc_tap}}</td>
                            <td>{{$value->note}}</td>
                            <td>
                                <a href="{{ URL::to('fbd/'.$value->mssv . '/' .$value->point_co_van_hoc_tap .'/'.$value->note) }}">
                                    <i class="glyphicon glyphicon-pencil" id="{{$value->mssv}}" data_point="{{$value->point_co_van_hoc_tap}}" data1 = "{{$value}}" data-toggle="modal" data-target="#myModal">

                                    </i>
                                </a>
                            </td>
                        </tr>
                        {{--*/ $dem++ /*--}}
                    @endforeach
                @endif

                @if(isset($daotao) )
                    @foreach($daotao as $value)
                        <tr>
                            <td>{{$dem}}</td>
                            <td>{{$value->mssv}}</td>
                            <td class="point">{{$value->point_dao_tao}}</td>
                            <td>{{$value->note}}</td>
                            <td>
                                <a href="{{ URL::to('fbd/' . $value->mssv . '/' .$value->point_dao_tao +'/' . $value->note) }}"><i class="glyphicon glyphicon-pencil" id="{{$value->mssv}}"  data_point="{{$value->point_dao_tao}}"  data1 = "{{$value}}" data-toggle="modal" data-target="#myModal"></i></a>
                            </td>
                        </tr>
                        {{--*/ $dem++ /*--}}
                    @endforeach
                @endif

                @if(isset($ctsv) )
                    @foreach($ctsv as $value)
                        <tr>
                            <td>{{$dem}}</td>
                            <td>{{$value->mssv}}</td>
                            <td class="point">{{$value->point_cong_tac_sv}}</td>
                            <td>{{$value->note}}</td>
                            <td>
                                <a href="{{ URL::to('fbd/' . $value->mssv . '/' . $value->point_cong_tac_sv  . '/'.$value->note) }}"><i class="glyphicon glyphicon-pencil" id="{{$value->mssv}}" data_point="{{$value->point_cong_tac_sv}}" data1 = "{{$value}}" data-toggle="modal" data-target="#myModal"></i></a>
                            </td>
                        </tr>
                        {{--*/ $dem++ /*--}}
                    @endforeach

                @endif

                @if(isset($doan))
                    @foreach($doan as $value)
                        <tr>
                            <td>{{$dem}}</td>
                            <td>{{$value->mssv}}</td>
                            <td class="point">{{$value->point_doan}}</td>
                            <td>{{$value->note}}</td>
                            <td>
                                <a href="{{ URL::to('fbd/'.$value->mssv .'/' .$value->point_doan .'/'.$value->note) }}"><i class="glyphicon glyphicon-pencil" id="{{$value->mssv}}" data_point="{{$value->point_doan}}"  data1 = "{{$value}}" data-toggle="modal" data-target="#myModal"></i></a>
                            </td>
                        </tr>
                        {{--*/ $dem++ /*--}}
                    @endforeach
                @endif

                @if(isset($khoa) )
                    @foreach($khoa as $value)
                        <tr>
                            <td>{{$dem}}</td>
                            <td>{{$value->mssv}}</td>
                            <td class="point">{{$value->point_khoa}}</td>
                            <td>{{$value->note}}</td>
                            <td>
                                <a href="{{ URL::to('fbd/' . $value->mssv .'/' .$value->point_khoa .'/'.$value->note) }}"><i class="glyphicon glyphicon-pencil" id="{{$value->mssv}}" data_point="{{$value->point_khoa}}"   data1 = "{{$value}}" data-toggle="modal" data-target="#myModal"></i></a>
                            </td>
                        </tr>
                        {{--*/ $dem++ /*--}}
                    @endforeach
                @endif

                @if(isset($khcn) )
                    @foreach($khcn as $value)
                        <tr>
                            <td>{{$dem}}</td>
                            <td>{{$value->mssv}}</td>
                            <td class="point">{{$value->point_khoa_hoc_cn}}</td>
                            <td>{{$value->note}}</td>
                            <td>
                                <a href="{{ URL::to('fbd/' . $value->mssv .'/' .$value->point_khoa_hoc_cn .'/'.$value->note) }}"><i class="glyphicon glyphicon-pencil" id="{{$value->mssv}}"  data_point="{{$value->point_khoa_hoc_cn}}" data1 = "{{$value}}" data-toggle="modal" data-target="#myModal"></i></a>
                            </td>
                        </tr>
                        {{--*/ $dem++ /*--}}
                    @endforeach
                @endif

            </table>
        {{--</form>--}}
    </div>
    <!-- Modal -->

@stop
@section('script_')
    @parent
    <script type="text/javascript">
        $(document).ready(function() {
            $('.glyphicon-pencil').click(function(){

                var data_students =  $(this).attr('data1');
                data_students = JSON.parse(data_students);
                var point =  $(this).attr('data_point');
                point = JSON.parse(point);
                var mssv = data_students.mssv;
                var noidung = data_students.note ;
                var diemtru = point;



                $('#editModal #mssv').val(mssv);
                $('#editModal #noidung').val(noidung);
                $('#editModal #diemtru').val(diemtru);

            });

//            $('.send_feedback').click(function(){
//                var mssv = $('#editModal #mssv').val();
//                var noidung = $('#editModal #noidung').val();
//                var diemtru = $('#editModal #diemtru').val();
//                var lydo = $('#editModal #lydo').val();
//
//                console.log(mssv);
//                console.log(noidung);
//                console.log(diemtru);
//                console.log(lydo);
//                $.ajax({
//                    headers: {
//                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
//                    },
//                    url: 'send_feedback',
//                    type: 'post',
//                    dataType: 'json',
//
//                    success: function(data){
//                        console.log(data);
//                    }
//                });
//            });
        });
    </script>
@stop