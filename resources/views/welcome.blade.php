@extends('layouts.app')@section('content')       
<section class="sptb py-6">
    <div class="container">
        <div class="row">
            <div class="col-xl-3 col-md-6 col-sm-12 d-catmb mb-4 mb-xl-0">
                <a href="{{url('/services')}}">
                <div class="d-flex">
                    <div><span class="icon-service1 icon-primary fs-35"> <i class="fe fe-users"></i> </span></div>
                    <div class="ml-4"><h3 class="mb-2 font-weight-bold">Services</h3>
                                              <p class="text-muted mb-0">trust of the market by providing consultation technical services</p>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 d-catmb mb-4 mb-xl-0">
            <a href="{{url('/courses')}}">
                <div class="d-flex">
                    <div><span class="icon-service1 icon-secondary fs-35"> <i class="fe fe-book"></i> </span></div>
                    <div class="ml-4 mt-1"><h3 class="mb-2 font-weight-bold"> Courses</h3>
                                              <p class="text-muted mb-0">Online / Offline Courses</p>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12 d-catmb mb-4 mb-md-0">
            <a href="{{url('/books')}}">
                <div class="d-flex">
                    <div><span class="icon-service1 icon-success fs-35"> <i class="fe fe-layers"></i> </span></div>
                    <div class="ml-4 mt-1"><h3 class="mb-2 font-weight-bold">Material</h3>
                                             <p class="text-muted mb-0"> Books as PDF to preview online or download </p>
                    </div>
                </div>
            </a>
            </div>
            <div class="col-xl-3 col-md-6 col-sm-12">
            <a href="{{url('/certificates')}}">
                <div class="d-flex">
                    <div><span class="icon-service1 icon-warning fs-35"> <i class="fe fe-file-text"></i> </span></div>
                    <div class="ml-4 mt-1"><h3 class="mb-2 font-weight-bold">Certificates</h3>
                                               <p class="text-muted mb-0">where you can fine your dact certified certificate</p>
                    </div>
                </div>
            </a>
            </div>
        </div>
    </div>
</section>        <!-- /Section -->        <!-- Section -->
<section class="sptb bg-white">
    <div class="container">
        <div class="section-title center-block text-center"><h2>Main Categories</h2>                    <span
                    class="sectiontitle-design"><span class="icons"></span></span></div>
        <div class="row">
            <div class="col-md-3">
                <div class="card bg-card-light">
                    <div class="card-body">
                        <div class="cat-item text-center">
                            {{--                            <a href="#"></a>--}}
                            <div class="cat-img"><img src="images/categories/1.jpg" alt=""></div>
                            <div class="cat-desc"><h3 class="font-weight-bold mb-1">Food Safety</h3></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-card-light">
                    <div class="card-body">
                        <div class="cat-item text-center">
                            {{--                            <a href="#"></a>--}}
                            <div class="cat-img"><img src="images/categories/2.jpg" alt=""></div>
                            <div class="cat-desc"><h3 class="font-weight-bold mb-1">Quality</h3></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="card bg-card-light">
                    <div class="card-body">
                        <div class="cat-item text-center">
                            {{--                            <a href="#"></a>--}}
                            <div class="cat-img"><img src="images/categories/3.jpg" alt=""></div>
                            <div class="cat-desc"><h3 class="font-weight-bold mb-1">Agriculture</h3></div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="card bg-card-light">
                    <div class="card-body">
                        <div class="cat-item text-center">
                            {{--                            <a href="#"></a>--}}
                            <div class="cat-img"><img src="images/categories/4.jpg" alt=""></div>
                            <div class="cat-desc"><h3 class="font-weight-bold mb-1">nutrition</h3></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>        <!-- Section -->        <!-- Section -->
<section class="sptb">
    <div class="container">
        <div class="section-title center-block text-center"><h2>Latest Courses</h2>                    <span
                    class="sectiontitle-design"><span class="icons"></span></span></div>
        @if(count($courses ) > 0)
            <div class="row">

                @foreach($courses as $course)


                    <div class="col-lg-4 col-md-12">
                        <div class="card overflow-hidden">
                            <div class="item-card9-img">
                                <div class="item-card9-imgs"><a href="{{url('/course/details/'.$course->id)}}"></a> <img src="/images/courses/1.jpg"
                                                                                                                         class="cover-image" alt=""></div>
                                <div class="item-overly-trans"><a href="#" class="bg-primary">Online / Offline</a></div>
                            </div>
                            <div class="card-body">
                                <div class="item-card9"><a href="{{url('/course/details/'.$course->id)}}" class="text-dark"><h3
                                                class="font-weight-semibold my-2">{{$course->name}}</h3></a>
                                    <div class="item-card9-desc mb-2"><span class="text-muted mr-4"><i
                                                    class="fa fa-user text-muted mr-1"></i> Trainer</span> <span
                                                class="text-muted mr-4"><i
                                                    class="fa fa-clock-o text-muted mr-1"></i> {{$course->duration}} hours</span> <span
                                                class="text-muted mr-4"><i class="fa fa-calendar text-muted mr-1"></i> {{date('Y-m-d' , strtotime($course->created_at))}}</span>
                                    </div>
{{--                                    <p class="mb-0">--}}
{{--                                        @if($course->description)--}}
{{--                                            {{$course->description}}--}}
{{--                                        @else--}}
{{--                                            No Description Defined Yet !--}}
{{--                                        @endif--}}
{{--                                        .</p>--}}
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="item-card9-footer d-flex">
                                    <div class="item-card9-cost"><h4 class="text-dark font-weight-semibold my-0">${{$course->price}}</h4>
                                    </div>
                                    <div class="ml-auto">
                                        <div class="rating-stars block">
                                            <div class="rating-stars-container">
                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                                <div class="rating-star sm is--active"><i class="fa fa-star"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                @endforeach
                <div class="col-lg-12 col-md-12">
                    <ul class="pagination justify-content-center">
                        <li class="page-item page-prev disabled"><a class="page-link" href="#">Prev</a></li>
                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item page-next"><a class="page-link" href="#">Next</a></li>
                    </ul>
                </div>


            </div>

        @endif
    </div>
    <div class="text-center"><a href="{{url('/courses')}}" class="btn btn-primary btn-lg">View All Courses</a></div>

</section>        <!-- /Section -->        <!-- Section -->
<section>
    <div class="cover-image sptb bg-background-color" data-image-src="images/bg/2.jpg">
        <div class="content-text mb-0">
            <div class="content-text mb-0">
                <div class="container">
                    <div class="text-center text-white"><h1 class="mb-5">Our Sponsors</h1>
                        <img class="border mt-5" src="images/sponsor.jpg" width="300" alt=""></div>
                </div>
            </div>
        </div>
    </div>
</section>        <!-- /Section -->        <!-- Section -->
<section class="sptb">
    <div class="container">
        <div class="section-title center-block text-center"><h2>How It Works?</h2>                    <span
                    class="sectiontitle-design"><span class="icons"></span></span></div>
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="">
                    <div class="mb-lg-0 mb-4">
                        <div class="service-card text-center">
                            <div class="icon-service"><i class="fa fa-user"></i></div>
                            <div class="servic-data mt-3"><h4 class="font-weight-semibold mb-2">Create Account</h4>
                                <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque
                                    facere possimus</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="">
                    <div class="mb-lg-0 mb-4">
                        <div class="service-card text-center">
                            <div class="icon-service"><i class="fa fa-search"></i></div>
                            <div class="servic-data mt-3"><h4 class="font-weight-semibold mb-2">Search for Courses</h4>
                                <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque
                                    facere possimus</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="">
                    <div class="mb-sm-0 mb-4">
                        <div class="service-card text-center">
                            <div class="icon-service"><i class="fa fa-mouse-pointer"></i></div>
                            <div class="servic-data mt-3"><h4 class="font-weight-semibold mb-2">Choose Course</h4>
                                <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque
                                    facere possimus</p></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="">
                    <div class="">
                        <div class="service-card text-center">
                            <div class="icon-service"><i class="fa fa-key"></i></div>
                            <div class="servic-data mt-3"><h4 class="font-weight-semibold mb-2">Register</h4>
                                <p class="text-muted mb-0">Nam libero tempore, cum soluta nobis est eligendi cumque
                                    facere possimus</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>        <!-- /Section -->        <!-- Section -->
<section>
    <div class="cover-image sptb bg-background" data-image-src="images/bg/3.jpg">
        <div class="header-text1 mb-0">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-7 col-lg-7 col-md-12">
                        <div class="text-center text-white mb-5"><h1 class="mb-3 display-3">Register <span
                                        class="font-weight-bold">Now</span></h1>
                            <p class="fs-18">Create an account & become a member of our website.</p></div>
                    </div>
                    <div class="col-xl-5 col-lg-5 col-md-12">
                        <div class="card mb-0 shadow-none">
                            <div class="card-body"><h3 class="mb-4">Sign Up Now!</h3>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fe fe-user fs-16 lh-0 op-6"></i></div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Full Name"></div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fe fe-mail fs-16 lh-0 op-6"></i></div>
                                    </div>
                                    <input type="text" class="form-control" placeholder="Email"></div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fe fe-unlock fs-16 lh-0 op-6"></i></div>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Password"></div>
                                <div class="input-group mb-4">
                                    <div class="input-group-prepend">
                                        <div class="input-group-text"><i class="fe fe-unlock fs-16 lh-0 op-6"></i></div>
                                    </div>
                                    <input type="password" class="form-control" placeholder="Confirm Password"></div>
                                <a class="btn btn-primary btn-lg btn-block" href="#">Sign Up</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>                <!-- /header-text -->            </div>
</section>        <!-- /Section -->        <!-- Section -->
<section class="sptb bg-white">
    <div class="container">
        <div class="section-title center-block text-center"><h2 class=" position-relative">Best Trainers</h2>
            <span class="sectiontitle-design"><span class="icons"></span></span>
            <p>certified from both The AUC & Quality America Inc. – USA, </p></div>
        <div class="row">
            <div class="col-lg-12">
                <div class="">
                    <div id="myCarousel" class="owl-carousel testimonial-owl-carousel owl-loaded owl-drag">
                        <div class="owl-stage-outer">
                            <div class="owl-stage">
                                <div class="owl-item">
                                    <div class="item text-center">
                                        <div class="card-body pb-0">
                                            <div class="row">
                                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                                    <div>
                                                        <div class="testimonia-img mx-auto mb-3"><img
                                                                    src="images/trainer.jpg" alt=""></div>
                                                        <div class="testimonia-data"><h4 class="fs-20 mb-1">Mohamed
                                                                Gomaa</h4>
                                                            <div class="rating-stars mb-3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active"><i
                                                                                class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i
                                                                                class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i
                                                                                class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i
                                                                                class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i
                                                                                class="fa fa-star"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p><i class="fa fa-quote-left"></i>   a professional consultant with solid knowledge and experience across the entire Quality Management
                                                            including, Quality Planning, Quality Control, Quality Assurance, Quality Improvement, Quality Function and
                                                            Quality Systems Auditing supported by wide and deep knowledge in ISO 9001,22000.14001.OHSAS
                                                            18001,FSSC,BRC,HACCP.   </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="item text-center">
                                        <div class="card-body pb-0">
                                            <div class="row">
                                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                                    <div>
                                                        <div class="testimonia-img mx-auto mb-3"><img
                                                                    src="images/trainer.jpg" alt=""></div>
                                                        <div class="testimonia-data"><h4 class="fs-20 mb-1">Mohamed
                                                                Gomaa</h4>
                                                            <div class="rating-stars mb-3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active"><i
                                                                                class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i
                                                                                class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i
                                                                                class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i
                                                                                class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i
                                                                                class="fa fa-star"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p><i class="fa fa-quote-left"></i>    has proven records in implementation of continuous improvement using Six Sigma, lean Manufacturing and
                                                            Kaizen philosophy in many sectors and act as trainer over 2 years for more than 50 hrs. in ISO 9001,22000 .
                                                            ,FSSC,BRC,HACCP,GMP ,Hygiene ,5S ,7waste ,lean 6 Sigma   .</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="owl-item">
                                    <div class="item text-center">
                                        <div class="card-body pb-0">
                                            <div class="row">
                                                <div class="col-xl-8 col-md-12 d-block mx-auto">
                                                    <div>
                                                        <div class="testimonia-img mx-auto mb-3"><img
                                                                    src="images/trainer.jpg" alt=""></div>
                                                        <div class="testimonia-data"><h4 class="fs-20 mb-1">Mohamed
                                                                Gomaa</h4>
                                                            <div class="rating-stars mb-3">
                                                                <div class="rating-stars-container">
                                                                    <div class="rating-star sm is--active"><i
                                                                                class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i
                                                                                class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm is--active"><i
                                                                                class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm  is--active"><i
                                                                                class="fa fa-star"></i></div>
                                                                    <div class="rating-star sm  is--active"><i
                                                                                class="fa fa-star"></i></div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <p><i class="fa fa-quote-left"></i>    Operation manager in CERES& TUV intercert- group of TUV Saarland(certification body)
                                                            lead auditor of management systems for many standard as ISO9001,22000.14001.OHSAS
                                                            18001,FSSC,BRC,HACCP in CERES& TUV intercertgroup of TUV Saarland(certification body)   .</p></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="owl-nav">
                            <button type="button" role="presentation" class="owl-prev"><span
                                        aria-label="Previous">‹</span></button>
                            <button type="button" role="presentation" class="owl-next"><span aria-label="Next">›</span>
                            </button>
                        </div>
                        <div class="owl-dots disabled"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>        
@endsection