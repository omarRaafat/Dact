@extends('layouts.subApp')@section('content')
    <!-- /Section -->        <!-- Section -->
    <style>
        body{
            padding: 2rem 0rem;
        }
        .image-parent {
            max-width: 80px;
        }
    </style>
<section class="sptb">
    <div class="container">



        <div class="card">
            <div class="card-body">

                        <h6 class="text-muted">List of Books</h6>


                @if(count($books ) > 0)
                    @foreach($books as $book)

                        <div class="card overflow-hidden" >
                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    <a href="{{url('/book/preview/'.$book->title.'/'.$book->id)}}" >{{$book->title}}</a>
                                    <div class="image-parent">
                                        <img src="https://icons.iconarchive.com/icons/hopstarter/book/256/Adobe-PDF-Reader-Book-icon.png" class="img-fluid" alt="quixote">
                                    </div>
                                </li>


                            </ul>
                        </div>
                    @endforeach
                    <ul class="pagination">
                      {{$books->render()}}
                    </ul>
            </div>
            @else
                <h3>NO BOOKS FOUND</h3>
            @endif
        </div>
    </div>
</section>        <!-- /Section -->        <!-- Back to top -->        <a href="#top" id="back-to-top"><i
            class="fa fa-long-arrow-up"></i></a>        <!-- Scripts -->@endsection