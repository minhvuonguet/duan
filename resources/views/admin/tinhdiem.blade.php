@extends('layouts.admin')
@section('title',' List Admin')
@section('content')
    <div class="tinhdiem">
        <h2> Quản lí điểm rèn luyện {{$current_term->note}} </h2>
        <p> Đã tính điểm {{$current_term->is_caculator}} lần trong học kỳ này. và reset điểm {{$current_term->is_reset}} </p>

        <a  href="{{URL::to('tinhdiem')}}"> Tính điểm học kỳ này. </a>
        <a  href="{{URL::to('resetpoint')}}"> reset điểm học kỳ này </a>
    </div>
@stop