@extends('layouts.subApp')@section('content')    <!-- Section -->
<section class="sptb">
    <div class="container">
        <div class="card">
            <div class="card-body">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 d-block mx-auto">
                            <form action="{{url('/certificates')}}" method="POST">
                            @csrf
                            <div class="form search-background bg-transparent row no-gutters">
                                <div class="form-group col-xl-10 col-lg-9 col-md-12 mb-0 bg-white"><input required name="cert_sn" type="text"
                                                                                                          class="form-control input-lg"
                                                                                                          placeholder="Search for Certificates...">
                                </div>
                                <div class="col-xl-2 col-lg-3 col-md-12 mb-0"><button type="submit"
                                                                                      class="btn btn-lg btn-block btn-primary br-tl-md-0 br-bl-md-0">Search</button>
                                </div>
                            </div>
                            </form>
                        </div>
                    </div>

            </div>
        </div>
        @if($certificate)
        <div class="card text-center">
            <div class="card-body"><img src="{{$certificate->certificate}}"  class="img-thumbnail" alt=""></div>
            <div class="card-footer"><a href="{{$certificate->certificate}}" class="btn btn-primary btn-lg" download>Download</a></div>
        </div>
        @endif
    </div>
</section>    <!-- /Section -->@endsection