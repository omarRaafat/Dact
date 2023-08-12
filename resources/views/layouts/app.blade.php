<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" type="image/x-icon" href="/images/logo.png" />
    <link rel="shortcut icon" href="/images/logo.png" type="image/x-icon" />
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/horizontal-menu.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/skin-modes.css">
    <link rel="stylesheet" href="/css/color.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans');
        @import url('https://fonts.googleapis.com/css?family=Montserrat');

        body {
            font-family: 'Montserrat', sans-serif;

        }

        /* Category Ads */

        #ads {
            margin: 30px 0 30px 0;

        }

        #ads .card-notify-badge {
            position: absolute;
            left: -10px;
            top: -20px;
            background: #f2d900;
            text-align: center;
            border-radius: 30px 30px 30px 30px;
            color: #000;
            padding: 5px 10px;
            font-size: 14px;

        }

        #ads .card-notify-year {
            position: absolute;
            right: -10px;
            top: -20px;
            background: #ff4444;
            border-radius: 50%;
            text-align: center;
            color: #fff;
            font-size: 14px;
            width: 50px;
            height: 50px;
            padding: 15px 0 0 0;
        }


        #ads .card-detail-badge {
            background: #f2d900;
            text-align: center;
            border-radius: 30px 30px 30px 30px;
            color: #000;
            padding: 5px 10px;
            font-size: 14px;
        }



        #ads .card:hover {
            background: #fff;
            box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
            border-radius: 4px;
            transition: all 0.3s ease;
        }

        #ads .card-image-overlay {
            font-size: 20px;

        }


        #ads .card-image-overlay span {
            display: inline-block;
        }


        #ads .ad-btn {
            text-transform: uppercase;
            width: 150px;
            height: 40px;
            border-radius: 80px;
            font-size: 16px;
            line-height: 35px;
            text-align: center;
            border: 3px solid #e6de08;
            display: block;
            text-decoration: none;
            margin: 20px auto 1px auto;
            color: #000;
            overflow: hidden;
            position: relative;
            background-color: #e6de08;
        }

        #ads .ad-btn:hover {
            background-color: #e6de08;
            color: #1e1717;
            border: 2px solid #e6de08;
            background: transparent;
            transition: all 0.3s ease;
            box-shadow: 12px 15px 20px 0px rgba(46,61,73,0.15);
        }

        #ads .ad-title h5 {
            text-transform: uppercase;
            font-size: 18px;
        }
    </style>
</head>
<body>
<div id="app">









    {{--        <header class="main_header" >--}}
    {{--            <div class="container first_header">--}}
    {{--                <div class="row align-items-center">--}}
    {{--                    <div class="col-md-3 text-center">--}}
    {{--                        <a class="navbar-brand" href="{{url('/home')}}">--}}
    {{--                            <img src="https://scontent-mrs2-2.xx.fbcdn.net/v/t1.0-9/15781311_1612205049087711_3995904549201724131_n.png?_nc_cat=105&_nc_ohc=oWFwb8z7owAAQkcBqYGnR5zRpeO58xq2kCqyvWxUVquM2StCQT25E-PJg&_nc_ht=scontent-mrs2-2.xx&oh=cd3bfd2cbd591372f73b9cadeb1177e3&oe=5E82D472" style="width: 105px"; height="105px">--}}
    {{--                        </a>--}}

    {{--                    </div>--}}
    {{--                    <div class="col-md-6 text-center">--}}
    {{--                        <div class="times">--}}
    {{--                            <a class="navbar-brand">--}}
    {{--                            <span style="font-family: 'Times New Roman'">Deming</span>--}}
    {{--                            <span style="font-family: 'Times New Roman'">Academy</span>--}}
    {{--                            </a>--}}
    {{--                            <br>--}}
    {{--                            <span class="description" style="margin-right: 25px; font-family: 'Times New Roman'">#science_with_no_limits</span>--}}
    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                    <div class="col-md-3 d-flex justify-content-center">--}}
    {{--                        @if(!auth()->user() || auth()->user()->type != 0)--}}
    {{--                            <div class="sign_in">--}}


    {{--                                <div class="btn-group">--}}
    {{--                                    <a href="{{url('/login')}}" class="btn btn-light rounded-0 p-2"><i class="fa fa-user-circle-o"--}}
    {{--                                                                                                       aria-hidden="true"></i>Login</a>--}}

    {{--                                </div>--}}

    {{--                            </div>--}}
    {{--                        @else--}}
    {{--                            <div class="dropdown py-4">--}}
    {{--                                <button class="btn btn-outline-info dropdown-toggle" type="button" id="dropdownMenuButton"--}}
    {{--                                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
    {{--                                    Welcome {{auth()->user()->name}}--}}
    {{--                                </button>--}}
    {{--                                <div class="dropdown-menu text-right" aria-labelledby="dropdownMenuButton">--}}
    {{--                                    --}}{{--<a class="dropdown-item" href="{{url('/myOrders')}}">طلباتى السابقة</a>--}}
    {{--                                    <a class="dropdown-item" href="{{url('/profile')}}">Update My Info</a>--}}
    {{--                                    <div class="dropdown-divider"></div>--}}
    {{--                                    <a class="dropdown-item" href="{{ route('logout')}}"--}}
    {{--                                       onclick="event.preventDefault();--}}
    {{--                                                     document.getElementById('logout-form').submit();">--}}
    {{--                                        <i class="fa fa-user-circle-o"--}}
    {{--                                           aria-hidden="true"></i>--}}
    {{--                                       logout--}}
    {{--                                    </a>--}}
    {{--                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">--}}
    {{--                                        @csrf--}}
    {{--                                    </form>--}}
    {{--                                </div>--}}
    {{--                            </div>--}}
    {{--                        @endif--}}
    {{--                    </div>--}}
    {{--                </div>--}}
    {{--            </div>--}}
    {{--            <div class="second_header">--}}
    {{--                <nav  class="navbar navbar-expand-lg">--}}
    {{--                    <div class="container">--}}
    {{--                        <button class="navbar-toggler bg-white rounded-0" type="button" data-toggle="collapse" data-target="#navbarText"--}}
    {{--                                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">--}}
    {{--                            <span class="fa fa-bars"></span>--}}
    {{--                        </button>--}}
    {{--                        <div class="collapse navbar-collapse" id="navbarText">--}}
    {{--                            <ul class="navbar-nav mr-auto"  >--}}
    {{--                                <li class="nav-item active">--}}
    {{--                                    <a class="nav-link px-3 mx-2" href="{{url('/home')}}" style="font-family: 'Times New Roman'"><i class="fa fa-home fa-lg"></i>--}}
    {{--                                        Home<span class="sr-only">(current)</span></a>--}}
    {{--                                </li>--}}
    {{--                                <li class="nav-item">--}}
    {{--                                    <a class="nav-link px-3 mx-2" href="{{url('/courses')}}" style="font-family: 'Times New Roman'">--}}
    {{--                                        Courses</a>--}}
    {{--                                </li>--}}

    {{--                                <li class="nav-item">--}}
    {{--                                    <a class="nav-link px-3 mx-2" href="{{url('/services')}}" style="font-family: 'Times New Roman'">--}}
    {{--                                         Services</a>--}}
    {{--                                </li>--}}

    {{--                                <li class="nav-item">--}}
    {{--                                    <a class="nav-link px-3 mx-2" href="{{url('/online')}}" style="font-family: 'Times New Roman'">--}}
    {{--                                        Online</a>--}}
    {{--                                </li>--}}

    {{--                                <li class="nav-item">--}}
    {{--                                    <a class="nav-link px-3 mx-2" href="{{url('/certificates')}}" style="font-family: 'Times New Roman'">--}}
    {{--                                        Certificates</a>--}}
    {{--                                </li>--}}
    {{--                                <li class="nav-item">--}}
    {{--                                    <a class="nav-link px-3 mx-2" href="{{url('/about')}}" style="font-family: 'Times New Roman'"><i class="fa fa-info-circle fa-lg"--}}
    {{--                                                                                              style="font-size: 1.2em;"></i>About</a>--}}
    {{--                                </li>--}}
    {{--                                <li class="nav-item">--}}
    {{--                                    <a class="nav-link px-3 mx-2" href="{{url('/contact')}}" style="font-family: 'Times New Roman'"><i class="fa fa-envelope"></i>--}}
    {{--                                        Contact</a>--}}
    {{--                                </li>--}}
    {{--                            </ul>--}}

    {{--                        </div>--}}
    {{--                    </div>--}}
    {{--                </nav>--}}
    {{--            </div>--}}
    {{--        </header>--}}


    <div class="horizontalMenucontainer">

        @if(session()->has('error'))

            <input type="hidden" value="1" id="e">

            <input type="hidden" id="message_error" value="{{session()->get('error')}}">



        @endif



        @if(session()->has('message'))

            <input type="hidden" value="1" id="m">

            <input type="hidden" id="message_success" value="{{session()->get('message')}}">



       @endif
  
       <!-- Loader -->

        <div id="global-loader">

            <img src="images/loader.svg" class="loader-img" alt="">

        </div>

        <!-- /Loader -->

        <!-- Section -->

        <div class="cover-image bg-background2" style="background: url('./images/bg/1.jpg') center top;">

            <!-- Topbar -->

            <div class="header-main">

                <div class="top-bar">

                    <div class="container">

                        <div class="row">

                            <div class="col-xl-8 col-lg-8 col-sm-4 col-7">

                                <div class="top-bar-left d-flex">

                                    <div class="clearfix">

                                        <ul class="socials d-flex">

                                            <li><a href="https://www.facebook.com/DACT2020/" target="_blank" class="social-icon text-dark"><i class="fa fa-facebook"></i></a></li>

                                            <li><a href="#" class="social-icon text-dark" target="_blank"><i class="fa fa-twitter"></i></a></li>

                                            <li><a href="#" class="social-icon text-dark" target="_blank"><i class="fa fa-youtube-play"></i></a></li>

                                            <li><a href="https://www.linkedin.com/company/deming-company-dact" target="_blank" class="social-icon text-dark"><i class="fa fa-linkedin"></i></a></li>

                                        </ul>

                                    </div>

                                    <div class="clearfix"></div>

                                </div>

                            </div>

                            <div class="col-xl-4 col-lg-4 col-sm-8 col-5">

                                <div class="top-bar-right">


                                    <ul class="custom">
                                        @if(!auth()->user())
                                            <li><a href="{{route('register')}}" class="text-dark"><i class="fa fa-key mr-1"></i> <span>Register</span></a></li>

                                            <li><a href="{{route('login')}}" class="text-dark"><i class="fa fa-sign-in mr-1"></i> <span>Login</span></a></li>
                                        @else

                                            <li class="dropdown show">

                                                <a href="#" class="text-dark" data-toggle="dropdown"><i class="fa fa-user mr-1"></i><span> {{auth()->user()->name}}<i class="fa fa-caret-down text-white ml-1"></i></span></a>

                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-arrow">


                                                    <a href="{{url('/profile')}}" class="dropdown-item"><i class="dropdown-icon icon icon-pencil"></i> Edit Account</a>


                                                    <a href="{{route('logout')}}" method="POST" class="dropdown-item"
                                                       onclick="event.preventDefault();

                                                         document.getElementById('logout-form').submit();">

                                                        <i class="dropdown-icon icon icon-power"     >

                                                        </i>logout </a>

                                                </div>

                                            </li>

                                    </ul>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">

                                        @csrf

                                    </form>
                                    @endif

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

                <!-- /Topbar -->

                <!-- Header -->

                <header class="header-search header-logosec p-2">

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-12 col-md-12 text-center">

                                <div class="header-search-logo d-none d-lg-block">

                                    <a href="{{url('/')}}" class="header-logo">

                                        <img src="/images/logo.png" class="header-brand-img" alt="">

                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </header>

                <!-- /Header -->

                <!-- Mobile Header -->

                <div class="sticky">

                    <div class="horizontal-header clearfix">

                        <div class="container">

                            <a id="horizontal-navtoggle" class="animated-arrow"><span></span></a>

                            <a href="{{url('/')}}">

                                <span class="smllogo"><img src="/images/logo.png" width="50" alt=""></span>

                            </a>

                        </div>

                    </div>

                </div>

                <!-- /Mobile Header -->

                <!-- Horizontal Menu -->

                <div id="sticky-wrapper" class="sticky-wrapper">

                    <div class="header-style horizontal-main bg-dark-transparent clearfix">

                        <div class="horizontal-mainwrapper container clearfix">

                            <nav class="horizontalMenu clearfix d-md-flex">

                                <div class="horizontal-overlapbg"></div>

                                <ul class="horizontalMenu-list">

                                    <li><a href="{{url('/')}}" class="active">Home</a></li>

                                    <li><a href="{{url('/about')}}">About us</a></li>

                                    <li><a href="{{url('/services')}}">Services</a></li>

                                    <li><a href="{{url('/courses')}}">Courses</a></li>
                                    <li><a href="{{url('/books')}}">Material</a></li>

                                    <li><a href="{{url('/online')}}">Online</a></li>

                                    <li><a href="{{url('/certificates')}}">Certificates</a></li>

                                    <li><a href="{{url('/contact')}}">Contact us</a></li>

                                </ul>

                            </nav>

                        </div>

                    </div>

                </div>

            </div>

            <!-- /Horizontal Menu -->

            <!-- Section -->

            <section>

                <div class="sptb-4 sptb-tab">

                    <div class="header-text mb-0">

                        <div class="container">

                            <div class="text-center text-white mb-6">

                                <a href="#" class="typewrite" data-period="2000" data-type='["Find The Best Trainers and Build Your Future", "Training Programs for Quality and Food Safety"]'>

                                </a>

                            </div>

                            <div class="row">

                                <div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">

                                    <div class="row">

                                        <div class="col-xl-10 col-lg-12 col-md-12 d-block mx-auto">

                                            <div class="form search-background bg-transparent row no-gutters">

                                                <div class="form-group col-xl-4 col-lg-3 col-md-12 mb-0 bg-white">

                                                    <select class="form-control" style="height: 46px;">

                                                        <option>Select Category</option>

                                                        <option>Food Safety</option>

                                                        <option>Quality</option>

                                                        <option>Agriculture</option>
                                                        <option value="">nutrition</option>
                                                    </select>

                                                </div>

                                                <div class="form-group col-xl-6 col-lg-6 col-md-12 mb-0 bg-white">

                                                    <input type="text" class="form-control input-lg" placeholder="Search for Courses...">

                                                </div>

                                                <div class="col-xl-2 col-lg-3 col-md-12 mb-0">

                                                    <a href="/" class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Search</a>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                    <!-- /header-text -->

                </div>

            </section>

            <!-- /Section -->

        </div>

        <!-- /Section -->




        @yield('content')

        <!-- Footer -->

        <section>

            <footer class="bg-dark text-white">

                <div class="footer-main">

                    <div class="container">

                        <div class="row">

                            <div class="col-lg-4 col-md-12">

                                <h6>Dact Academy</h6>

                                <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">

                                <p>Dact offers a number of training programs for all levels of management and organization at the level of individuals and institutions under the supervision of a selection of specialists and experts in the field of quality and food safety and occupational health and safety.</p>

                            </div>

                            <div class="col-lg-4 col-md-12">

                                <h6>Quick Links</h6>

                                <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">

                                <div class="row">

                                    <div class="col-lg-6 col-md-12">

                                        <ul class="list-unstyled mb-0">

                                            <li><i class="fa fa-caret-right text-primary mr-3"></i><a href="{{url('/')}}">Home</a></li>

                                            <li><i class="fa fa-caret-right text-primary mr-3"></i><a href="{{url('/about')}}">About us</a></li>

                                            <li><i class="fa fa-caret-right text-primary mr-3"></i><a href="{{url('/services')}}">Services</a></li>

                                            <li><i class="fa fa-caret-right text-primary mr-3"></i><a href="{{url('/courses')}}">Courses</a></li>

                                        </ul>

                                    </div>

                                    <div class="col-lg-6 col-md-12">

                                        <ul class="list-unstyled mb-0">

                                            <li><i class="fa fa-caret-right text-primary mr-3"></i><a href="{{url('/online')}}">Online</a></li>

                                            <li><i class="fa fa-caret-right text-primary mr-3"></i><a href="{{url('/certificates')}}">Certificates</a></li>

                                            <li><i class="fa fa-caret-right text-primary mr-3"></i><a href="{{url('/contact')}}">Contact us</a></li>

                                        </ul>

                                    </div>

                                </div>

                            </div>

                            <div class="col-lg-4 col-md-12">

                                    <h6>Contact Info</h6>

                                    <hr class="deep-purple text-primary accent-2 mb-4 mt-0 d-inline-block mx-auto">

                                    <ul class="list-unstyled mb-0">

                                        <li><i class="fa fa-home fa-fw text-primary mr-2"></i><a href="#">1 El Kawther Street - 1st Floor Flat 3</a></li>

                                        <li><i class="fa fa-envelope fa-fw text-primary mr-2"></i><a href="mailto:dact@academic.com">training.dact@gmail.com</a></li>

                                        <li><i class="fa fa-phone fa-fw text-primary mr-2"></i><a href="tel:+ 0115 777 1461">+ 0115 777 1461</a></li>

                                    </ul>

                                <ul class="list-unstyled list-inline mt-3">

                                    <li class="list-inline-item">

                                        <a href="https://www.facebook.com/DACT2020/" target="_blank" class="btn-floating btn-sm mx-1"><i class="fa fa-facebook"></i></a>

                                    </li>

                                    <li class="list-inline-item">

                                        <a href="#" class="btn-floating btn-sm mx-1"><i class="fa fa-twitter"></i></a>

                                    </li>

                                    <li class="list-inline-item">

                                        <a href="#" class="btn-floating btn-sm mx-1"><i class="fa fa-youtube-play"></i></a>

                                    </li>

                                    <li class="list-inline-item">

                                        <a  href="https://www.linkedin.com/company/deming-company-dact" target="_blank"  class="btn-floating btn-sm mx-1"><i class="fa fa-linkedin"></i></a>

                                    </li>

                                </ul>

                            </div>

                        </div>

                    </div>

                </div>

                <div class="bg-dark  text-white p-0">

                    <div class="container">

                        <div class="row d-flex">

                            <div class="col-lg-12 col-sm-12 mt-3 mb-3 text-center">Dact Academy &copy; 2023. All rights reserved.</div>

                        </div>

                    </div>

                </div>

            </footer>

        </section>

        <!-- Footer -->

        <!-- Section -->
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



    <script>

        if($('#e').val() == 1){



            toastr.error($('#message_error').val());

            var audio = new Audio('../../../public/when.mp3');

            audio.play();

        }



        if($('#m').val() == 1){



            toastr.success($('#message_success').val());

            var audio = new Audio('../../../public/success.mp3');

            audio.play();

        }

    </script>



    <!-- Smartsupp Live Chat script -->
    <!-- Smartsupp Live Chat script -->
    <script type="text/javascript">
        var _smartsupp = _smartsupp || {};
        _smartsupp.key = '1e0f54f31c054e67120860d0ed2d64d3452706e5';
        window.smartsupp||(function(d) {
            var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
            s=d.getElementsByTagName('script')[0];c=d.createElement('script');
            c.type='text/javascript';c.charset='utf-8';c.async=true;
            c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
        })(document);
    </script>

    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/horizontal-menu.js"></script>
    <script src="/js/sticky.js"></script>
    <script src="/js/typewritter.js"></script>
    <script src="/js/owl.carousel.min.js"></script>
    <script src="/js/owl-carousel.init.js"></script>
    <script src="/js/custom.js"></script>


</div>


</body>
</html>
