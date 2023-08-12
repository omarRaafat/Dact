@extends('layouts.subApp')@section('content')        <!-- /Section -->        <!-- Section -->
<section class="sptb">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 d-block mx-auto">
                        <div class="form search-background bg-transparent row no-gutters">
                            <div class="form-group col-xl-4 col-lg-3 col-md-12 mb-0 bg-white"><select
                                        class="form-control" style="height: 46px;">
                                    <option>Select Category</option>
                                    <option>Food Safety</option>
                                    <option>Quality</option>
                                    <option>Agriculture</option>
                                </select></div>
                            <div class="form-group col-xl-6 col-lg-6 col-md-12 mb-0 bg-white"><input type="text"
                                                                                                     class="form-control input-lg"
                                                                                                     placeholder="Search for Courses...">
                            </div>
                            <div class="col-xl-2 col-lg-3 col-md-12 mb-0"><a href="#"
                                                                             class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Search</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="card">
            <div class="card-body">
                @if(count($courses ) > 0)
                    @foreach($courses as $course)
                <div class="card overflow-hidden">
                    <div class="d-md-flex">
                        <div class="item-card9-img">
                            <div class="item-card9-imgs"><a href="{{url('/$course/details/'.$course->id)}}"></a> <img src="/images/courses/1.jpg"
                                                                                         class="cover-image" alt="">
                            </div>
                            <div class="item-overly-trans"><a href="#" class="bg-primary">Online</a></div>
                        </div>
                        <div class="card border-0 mb-0">
                            <div class="card-body">
                                <div class="item-card9"><a href="{{url('/course/details/'.$course->id)}}" class="text-dark"><h3
                                                class="font-weight-semibold my-2">{{$course->name}}</h3></a>
                                    <div class="item-card9-desc mb-2"><span class="text-muted mr-4"><i
                                                    class="fa fa-user text-muted mr-1"></i> Trainer</span> <span
                                                class="text-muted mr-4"><i class="fa fa-clock-o text-muted mr-1"></i> {{$course->duration}} hours</span>
                                        <span class="text-muted mr-4"><i class="fa fa-calendar text-muted mr-1"></i>{{date('Y-m-d' , strtotime($course->created_at))}}</span>
                                    </div>
                                    <p class="mb-0"> @if($course->description)
                                            {{$course->description}}
                                        @else
                                            No Description Defined Yet !
                                        @endif.</p></div>
                            </div>
                            <div class="card-footer pt-4 pb-4">
                                <div class="item-card9-footer d-flex">
                                    <div class="item-card9-cost"><h4 class="text-dark font-weight-semibold my-0">
                                            ${{$course->price}}</h4></div>
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
                </div>
                    @endforeach
                <ul class="pagination">
                    <li class="page-item page-prev disabled"><a class="page-link" href="#">Prev</a></li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item page-next"><a class="page-link" href="#">Next</a></li>
                </ul>
            </div>
            @else
                <h3>NO COURSES FOUND</h3>
            @endif
        </div>
    </div>
</section>        <!-- /Section -->        <!-- Back to top -->        <a href="#top" id="back-to-top"><i
            class="fa fa-long-arrow-up"></i></a>        <!-- Scripts -->@endsection