@extends('layouts.subApp')
@section('content')        <!-- Section -->
<section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-xl-8 col-lg-8 col-md-12">
                <div class="card overflow-hidden">
                    <div class="card-body">
                        <div class="item-card9"><h2
                                    class="text-dark font-weight-semibold mt-4 mb-2">{{$course->name}}</h2>
                            <div class="item-card9-desc mb-2"><span class="text-muted mr-4"><i
                                            class="fa fa-user text-muted mr-1"></i> Trainer</span> <span
                                        class="text-muted mr-4"><i
                                            class="fa fa-clock-o text-muted mr-1"></i> {{$course->duration}} hours</span>
                                <span
                                        class="text-muted mr-4"><i class="fa fa-calendar text-muted mr-1"></i> {{date('Y-m-d' , strtotime($course->created_at))}}</span>
                            </div>
                            <hr>
                            <p>@if($course->description){{$course->description}} @else No Description Defined Yet
                                ! @endif.</p></div>
                    </div>
                    <div class="card-footer">
                        <div class="item-card9-footer d-flex">
                            <div class="item-card9-cost"><h4 class="text-dark font-weight-semibold my-0">
                                    ${{$course->price}}</h4>
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
                <div class="card">
                    <div class="card-header"><h3 class="card-title">What's Included</h3></div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="mb-2"><i class="fa fa-check text-success"></i> {{$course->content}}.
                            </li>

                        </ul>
                    </div>
                </div>
                <a href="{{url('/course/register/'.$course->id)}}" class="btn btn-primary btn-lg">Register for Course</a></div>
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="card">
                    <div class="item-card9-img">
                        <div class="item-card9-imgs"><a href="course.html"></a> <img src="/images/courses/1.jpg"
                                                                                     class="cover-image" alt=""></div>
                        <div class="item-overly-trans"><a href="#" class="bg-primary">Online</a></div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header"><h3 class="card-title">Course Trainer</h3></div>
                    <div class="card-body item-user">
                        <div class="profile-pic mb-0"><img src="/images/trainer.jpg" class="brround avatar-xxl" alt="">
                        </div>
                        <h4 class="mt-3 mb-1 text-center font-weight-semibold">Mohamed Gomaa</h4></div>
                    <div class="card-footer">
                        <div class="row profie-img">
                            <div class="col-md-12">
                                <div class="media-heading"><h5><strong>Biography</strong></h5></div>
                                <p class="mt-3 mb-0">Operation manager in CERES& TUV intercert- group of TUV Saarland(certification body)
                                    lead auditor of management systems for many standard as ISO9001,22000.14001.OHSAS
                                    18001,FSSC,BRC,HACCP in CERES& TUV intercertgroup of TUV Saarland(certification body)
                                    certified Lean Six-Sigma green Belt from both The AUC & Quality America Inc. – USA, .</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>        <!-- /Section -->        <!-- Back to top -->        <a href="#top" id="back-to-top"><i
            class="fa fa-long-arrow-up"></i></a>        <!-- Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>



@endsection