@extends('layouts.sinh_vien')
@section('content')
    <form>
        <table class="table table-bordered">
            <tr>
                <th class="col-md-1"> STT </th>
                <th class="col-md-3"> Học kỳ </th>
                <th class="col-md-3"> Điểm rèn luyện </th>
                <th class="col-md-2"> Xếp loại </th>
                <th class="col-md-2"> Chi tiết </th>
            </tr>
            <tr>
                <td> {{$students}} </td>
            </tr>
        </table>
    </form>
@stop