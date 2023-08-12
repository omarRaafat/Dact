@extends('layouts.subApp')@section('content')
    <!-- /Section -->        <!-- Section -->
    <style>

        .image-parent {
            max-width: 80px;
        }

        @media only screen and (max-width: 600px) {
            #bpre{
                width: 100%;
                height:100px;
            }

        }
    </style>
<section class="sptb">
    <div class="container">



        <div class="card">
            <div class="card-body">

                        <h3 class="text-muted" style="font-weight: bold">{{$book->title}} </h3>




                        <div class="card overflow-hidden" >
                            <object data="{{url($book->book_link)}}" id="bpre" type="application/pdf" width="100%" height="750px">
                                <p>Your web browser doesn't support a PDF plugin.
                                    Instead you can <a href="{{url($book->book_link)}}" style="color:orangered">click here to
                                        download the PDF file.</a> </p>
                            </object>
{{--                            <embed src="{{url($book->book_link)}}" width="100%" height="500" alt="pdf" pluginspage="http://www.adobe.com/products/acrobat/readstep2.html">--}}
                        </div>

            </div>
            <div class="container"> @include('include.disqus')</div>
        </div>
    </div>
</section>        <!-- /Section -->        <!-- Back to top -->        <a href="#top" id="back-to-top"><i
            class="fa fa-long-arrow-up"></i></a>        <!-- Scripts -->@endsection