<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../../../css/assets/img/ICON.png">
    <link rel="icon" type="image/png" href="../../../css/assets/img/ICON.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>لوحه تحكم داكت</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="../../../css/assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../../../css/assets/css/now-ui-dashboard.css?v=1.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../../../css/assets/demo/demo.css" rel="stylesheet" />
    <!-- ARABIC GOOGLE FONT -->
    <link href="https://fonts.googleapis.com/css?family=Tajawal" rel="stylesheet">

</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="orange">

    ||||

        <div class="logo">
            <img src="/images/logo.png" width="50px" height="50px">
            <span style="color: whitesmoke">لوحه تحكم داكت</span>



        </div>
        <div class="sidebar-wrapper">
            <ul class="nav">
                <li class="active">
                    <a href="{{url('/admin')}}">
                        <i class="now-ui-icons design_app"></i>
                        <p>لوحة التحكم</p>
                    </a>
                </li>


                <li>
                    <a href="{{url('/admin/certificates')}}">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>الشهادات</p>
                    </a>
                </li>


                <li>
                    <a href="{{url('/admin/books')}}">
                        <i class="now-ui-icons text_caps-small"></i>
                        <p>الكتب</p>
                    </a>
                </li>


            </ul>
        </div>
    </div>
    <div class="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-primary  navbar-absolute bg-primary fixed-top">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        <button type="button" class="navbar-toggler">
                            <span class="navbar-toggler-bar bar1"></span>
                            <span class="navbar-toggler-bar bar2"></span>
                            <span class="navbar-toggler-bar bar3"></span>
                        </button>
                    </div>
                    <a class="navbar-brand" href="#pablo">لوحة التحكم</a>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                    <span class="navbar-toggler-bar navbar-kebab"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    {{--                        <form style="direction:  ltr;">--}}
                    {{--                            <div class="input-group no-border">--}}
                    {{--                                <input type="text" value="" class="form-control" placeholder="بحث...">--}}
                    {{--                                <span class="input-group-addon">--}}
                    {{--                                    <i class="now-ui-icons ui-1_zoom-bold"></i>--}}
                    {{--                                </span>--}}
                    {{--                            </div>--}}
                    {{--                        </form>--}}
                    <ul class="navbar-nav navbar-primary" >
                        <li class="nav-item">
                            <a class="nav-link" href="#pablo">
                                <i class="now-ui-icons media-2_sound-wave"></i>
                                <p>
                                    <span class="d-lg-none d-md-block">الحالة</span>
                                </p>
                            </a>
                        </li>
                        {{--                            <li class="nav-item dropdown">--}}
                        {{--                                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                    <i class="now-ui-icons location_world"></i>--}}
                        {{--                                    <p>--}}
                        {{--                                        <span class="d-lg-none d-md-block">بعض الأحداث</span>--}}
                        {{--                                    </p>--}}
                        {{--                                </a>--}}
                        {{--                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">--}}
                        {{--                                    <a class="dropdown-item" href="#">حدث</a>--}}
                        {{--                                    <a class="dropdown-item" href="#">حدث آخر</a>--}}
                        {{--                                    <a class="dropdown-item" href="#">عنوان هنا أيضاً</a>--}}
                        {{--                                </div>--}}
                        {{--                            </li>--}}
                        <li class="nav-item dropdown">
                            <a class="nav-link " id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                                <i class="now-ui-icons users_single-02"></i>
                                <p>
                                    @auth()
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                        @endauth
                                </p>
                            </a>





                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                    تسجيل خروج ؟
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <br><br><br><br><br><br>


        @yield('content')


        <footer class="footer">
            <div class="container-fluid">

                <div class="copyright">
                    &copy;
                    <script>
                        document.write(new Date().getFullYear())
                    </script>جميع الحقوق محفوظه

                </div>
            </div>
        </footer>
    </div>
</div>
</body>
<!--   Core JS Files   -->
<script src="../../../css/assets/js/core/jquery.min.js"></script>
<script src="../../../css/assets/js/core/popper.min.js"></script>
<script src="../../../css/assets/js/core/bootstrap.min.js"></script>
<script src="../../../css/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>

<!-- Chart JS -->
<script src="../../../css/assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../../../css/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for LK UI Dashboard: parallax effects, scripts for the example pages etc -->
{{--<script src="../../../css/assets/js/now-ui-dashboard.js?v=1.0.1"></script>--}}
<!-- LK UI Dashboard DEMO methods, don't include it in your project! -->
<script src="../../../css/assets/demo/demo.js"></script>
<script>
    $(document).ready(function() {
        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();
    });
</script>

</html>
