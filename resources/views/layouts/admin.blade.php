<!DOCTYPE html>
<html>
<head>
    <meta name="csrf-token" content="{{csrf_token()}}">
    <title> @yield('title')</title>
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,900" >
    <link href="http://fonts.googleapis.com/css?family=Lato+Open+Sans:400,300,600,700" >;
    <link href="{!! url('public/assets/Admin/css/bootstrap.css') !!}"rel="stylesheet">
    <link href="{!! url('public/assets/Admin/css/style.css') !!}" rel="stylesheet">
    <link href="{!! url('public/assets/Admin/css/rtl.css') !!}" rel="stylesheet">
    <link href="{!! url('public/assets/Admin/css/theme.css') !!}" rel="stylesheet">
    <link href="{!! url('public/assets/Admin/css/ui.css') !!}" rel="stylesheet">
    <link href="{!! url('public/assets/Admin/css/customs.css') !!}" rel="stylesheet">

    <script type="text/javascript" src="public/assets/Admin/js/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="public/assets/Admin/js/bootstrap.js"></script>
    <script type="text/javascript" src="public/assets/Admin/js/jquery.validate.js"></script>
    <script type="text/javascript" src="public/assets/Admin/js/jquery.cookie.js"></script>
    <script type="text/javascript" src="public/assets/Admin/plugins/noty/jquery.noty.packaged.min.js"></script>
    <script type="text/javascript" src="public/assets/Admin/js/main.js"></script>
</head>
<body>
@section('main-parent')
    <div class="sidebar">
        <div class="logopanel">
            <h1>
                {{--<a href="#">MVH - UET</a>--}}
            </h1>
        </div>
        <div class="sidebar-inner">
            <div class="sidebar-top big-img">
                <div class="user-image">
                    {{--@if(Auth::user()->image)--}}
                        {{--<img src="public/uploads/admin_img/{{Auth::user()->image}}" class="img-responsive img-circle" alt="friend 8">--}}
                    {{--@else--}}
                        <img src="public/assets/Admin/images/default.png" class="img-responsive img-circle" alt="friend 8">
                    {{--@endif--}}
                </div>
                <h4>
                {{Auth::user()->username}}
                </h4>
                <div class="dropdown user-login">
                    <form action="searchemployee" method="get" class="searchform" id="search-results">
                        <input class="form-control" name="name" placeholder="Search employee..." type="text">
                        {!! csrf_field() !!}
                    </form>
                </div>
            </div>

            <ul class="nav nav-sidebar">

                <li class=" nav-active active"><a href="javascript:void(0)"><i class="icon-home"></i><span>Admin Manager</span></a></li>


                @if(Auth::user()->username == 'admin1' || Auth::user()->username == 'phongctsv')
                    <li class="nav-parent">
                        <a href="{{ URL::to('formdiem') }}" class="test_"><i class="icon-puzzle"></i><span> Form điểm rèn luyện </span> </a>
                    </li>

                    <li class="nav-parent">
                        <a href="{{ URL::to('newterm') }}" class="test_"><i class="icon-puzzle"></i><span> Quản lý học kỳ </span> </a>
                    </li>

                    <li class="nav-parent">
                        <a href="{{ URL::to('newclass') }}" class="test_"><i class="icon-puzzle"></i><span>Thêm danh sách lớp</span> </a>
                    </li>
                    <li class="nav-parent">
                        <a href="{{ URL::to('listclass') }}" class="test_"><i class="icon-puzzle"></i><span>xem danh sách sv</span> </a>
                    </li>

                    {{--Danh sách sinh viên vi phạm ý thức công dân và vi phạm ý thức sinh viên--}}
                    <li class="nav-parent">
                        <a href="{{ URL::to('newclass') }}" class="test_"><i class="icon-puzzle"></i><span>Thêm Danh sách vi phạm </span> </a>
                    </li>

                    <li class="nav-parent">
                        <a href="{{ URL::to('khenThuong.khen_thuong') }}" class="test_"><i class="icon-puzzle"></i><span>Danh sách khen thưởng</span> </a>
                    </li>

                    <li class="nav-parent">
                        <a href="{{ URL::to('newclass') }}" class="test_"><i class="icon-puzzle"></i><span>Phản hồi từ sinh viên </span> </a>
                    </li>

                    <li class="nav-parent">
                        <a href="{{URL::to('tinhdiem')}}"><i class="icon-screen-desktop"></i><span>Tính điểm</span> </a>
                    </li>
                @endif

                @if(Auth::user()->username == 'phongdaotao')

                    <li class="nav-parent">
                        <a href="{{URL::to('newclass')}}"><i class="icon-screen-desktop"></i><span> Import Danh Sách </span> </a>
                    </li>

                    <li class="nav-parent">
                        <a href="{{URL::to('phongDaoTao.xem_diem')}}"><i class="icon-screen-desktop"></i><span>Xem Điểm Sinh Viên </span> </a>
                    </li>
                    <li class="nav-parent">
                        <a href="{{URL::to('phongDaoTao.vi_pham_quyche')}}"><i class="icon-screen-desktop"></i><span>Xem DS Vi Pham QC thi </span> </a>
                    </li>

                @endif

                @if(Auth::user()->username == 'khoahoccongnghe')

                    <li class="nav-parent">
                        <a href="{{URL::to('newclass')}}"><i class="icon-screen-desktop"></i><span> Import Danh Sách </span> </a>
                    </li>

                    <li class="nav-parent">
                        <a href="{{URL::to('phongkhcn.listclass')}}"><i class="icon-screen-desktop"></i><span>  sinh viên đạt giải </span> </a>
                    </li>
                    <li class="nav-parent">
                        <a href="{{URL::to('phongkhcn.listclass')}}"><i class="icon-screen-desktop"></i><span> Xem Danh Sách </span> </a>
                    </li>

                @endif

                @if(Auth::user()->username == 'vanphongdoan')

                    <li class="nav-parent">
                        <a href="{{URL::to('newclass')}}"><i class="icon-screen-desktop"></i><span>import sv  hoạt động</span> </a>
                    </li>

                    <li class="nav-parent">
                        <a href="{{URL::to('newclass')}}"><i class="icon-screen-desktop"></i><span>import sv khen thưởng </span> </a>
                    </li>
                    <li class="nav-parent">
                        <a href="{{URL::to('doanvien')}}"><i class="icon-screen-desktop"></i><span>khen thưởng </span> </a>
                    </li>
                    <li class="nav-parent">
                        <a href="{{URL::to('doanVien.khen_thuong')}}"><i class="icon-screen-desktop"></i><span>Khen thuong doan vien </span> </a>
                    </li>

                @endif

                @if(Auth::user()->username == 'vanphongkhoa')

                    <li class="nav-parent">
                        <a href="{{URL::to('newclass')}}"><i class="icon-screen-desktop"></i><span>import sinh viên vi phạm</span> </a>
                    </li>
                    <li class="nav-parent">
                        <a href="{{URL::to('vanPhongKhoa.xem_diem')}}"><i class="icon-screen-desktop"></i><span>Xem Diem </span> </a>
                    </li>


                @endif


                {{--cố vấn học tập--}}
                @if(Auth::user()->id_role == 4)

                    <li class="nav-parent">
                        <a href="{{URL::to('newclass')}}"><i class="icon-screen-desktop"></i><span>Thêm danh sách vi phạm sinh hoạt lớp </span> </a>
                    </li>
                    <li class="nav-parent">
                        <a href="{{URL::to('coVanHocTap.listclass')}}"><i class="icon-screen-desktop"></i><span>xem danh sách  </span> </a>
                    </li>


                @endif

                <li class="nav-parent">
                    <a href="{{URL::to('adstudents')}}"><i class="icon-bulb"></i><span> Thống kê </span> </a>
                </li>

            </ul>


        </div>
    </div>

    <div class="main-content">
        <!-- BEGIN TOPBAR -->
        <div class="topbar">

            <div class="header-right">
                <ul class="header-menu nav navbar-nav">
                    <li class="dropdown" id="user-header">

                    </li>
                    <li class="logout_Admin">
                        {{--{{Auth::user()->username}}--}}
                        <a href="{{ URL::to('logout') }}"><i class="icon-logout"></i><span>Logout</span></a>
                    </li>
                </ul>
            </div>
            <!-- header-right -->
        </div>
        <div class="">
            <div class="col-md-12">

                @yield('content')

            </div> <!-- end .page-content-->
        </div> <!-- end .main-content-->

    </div>

</body>

</html>
@show
@section('script_')
    <script>
        $(document).ready(function(){
            $('.nav-parent').click( function(){
               console.log($(this));
            });
        });
    </script>
@show