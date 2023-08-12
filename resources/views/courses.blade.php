@extends('layouts.subApp')
@section('content')        <!-- Section -->

<section class="sptb">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 d-block mx-auto">
                        <form action="{{url('/course/search')}}" method="POST">
                        <div class="form search-background bg-transparent row no-gutters">

                                @csrf
{{--                            <div class="form-group col-xl-3 col-lg-3 col-md-12 mb-0 bg-white">--}}
{{--                                <select--}}
{{--                                        class="form-control" style="height: 46px;">--}}
{{--                                    <option>Select Category</option>--}}
{{--                                    <option>Food Safety</option>--}}
{{--                                    <option>Quality</option>--}}
{{--                                    <option>Agriculture</option>--}}
{{--                                </select>--}}
{{--</div>--}}
                            <div class="form-group col-xl-8 col-lg-8 col-md-8 mb-0 bg-white"><input id="search_value" name="search_value" type="text"
                                                                                                     class="form-control input-lg"
                                                                                                     placeholder="Search for Courses...">
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-4 mb-0"><button href="#" type="submit"
                                                                             class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Search</button>
                            </div>

                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
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
{{--                                <p class="mb-0">--}}
{{--                                    @if($course->description)--}}
{{--                                    {{$course->description}}--}}
{{--                                        @else--}}
{{--                                        No Description Defined Yet !--}}
{{--                                    @endif--}}
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
        @else
            <h3>NO COURSES FOUND</h3>
        @endif
    </div>
</section>        <!-- /Section -->        <!-- Back to top -->        <a href="#top" id="back-to-top"><i
            class="fa fa-long-arrow-up"></i></a>        <!-- Scripts -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
{{--<script>--}}
{{--    function getSearchValue() {--}}
{{--        var search_value = $('#search_value').val();--}}
{{--        var _token = $('input[name="_token"]').val();--}}
{{--        $.ajax({--}}
{{--            url: '/course/search/' + search_value, type: 'GET', success: function (data) {--}}
{{--                if (data != '') {--}}
{{--                    $('#courses').empty();--}}
{{--                    for (var x = 0; x < data.length; x++) {--}}
{{--                        $('#courses').append(' <div id="restaurant"  class="col-md-3"><div class="card mb-4"> <img id="rest_image" class="card-img-top" src="' + data[x].image + '" alt="Card image cap"><div class="card-body"><h5 id="rest_name" class="card-title text-center">' + data[x].name + '</h5><hr><a href="/course/details/' + data[x].id + ')" class="btn btn-outline-info btn-sm">show details</a></div></div></div>')--}}
{{--                    }--}}
{{--                } else {--}}
{{--                    toastr.error('THERE IS NO COURSE WITH THIS NAME');--}}
{{--                    var audio = new Audio('../../../public/when.mp3');--}}
{{--                    audio.play();--}}
{{--                }--}}
{{--            }--}}
{{--        });--}}
{{--    }--}}
{{--</script>--}}

@endsection