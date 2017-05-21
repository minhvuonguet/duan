@extends('layouts.admin')
@section('title',' List Admin')
@section('content')
    <div class="tinhdiem">
        <h2> Quản lí điểm rèn luyện {{$current_term->note}} </h2>
        <p> Đã tính điểm {{$current_term->is_caculator}} lần trong học kỳ này. và reset điểm {{$current_term->is_reset}} </p>

        <a  href="{{URL::to('tinhdiem')}}"> Tính điểm học kỳ này. </a>
        <a  href="{{URL::to('resetpoint')}}"> reset điểm học kỳ này </a>
        <a  href="{{URL::to('checkImport')}}"> check. </a>
    </div>
    <div class="col-md-12">
        <div class="col-md-12">
            @if(isset($flash_message) && isset($flash_level))
                <div class="alert auto-hide alert-{{$flash_level}}">
                    <h4 class="text-center">{{$flash_message}}</h4>
                </div>
            @endif
        </div>
        <div class="row">
            @yield('content')
        </div>
    </div> <!-- end .page-content-->
@stop