@extends('layouts.admin')
@section('content')    <!-- Section -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

@if(session()->has('error'))
    <input type="hidden" value="1" id="e">
    <input type="hidden" id="message_error" value="{{session()->get('error')}}">

@endif

@if(session()->has('message'))
    <input type="hidden" value="1" id="m">
    <input type="hidden" id="message_success" value="{{session()->get('message')}}">

@endif

<div class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="card ">
                <div class="card-header">
                    <a onclick="popBookCreate()" class="btn btn-info" style="color: white">أضافه كتاب جديد</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th class="text-right">
                               اسم الكتاب
                            </th>

                            <th class="text-right">
                                اجراءات
                            </th>
                            </thead>
                            <tbody>
                            @foreach($books as $book)
                            <tr>
                                <td>
                                  {{$book->title}}
                                </td>

                                <td>
                                   <a href="{{url('admin/book/delete/'.$book->id)}}" class="btn btn-danger">حذف الكتاب</a>
                                    @if($book->visibility == 1)
                                    <a href="{{url('admin/book/visibility/'.$book->id.'/0')}}" class="btn btn-warning">
                                        اخفاء</a>

                                        @else

                                        <a href="{{url('admin/book/visibility/'.$book->id.'/1')}}" class="btn btn-success">
                                            اظهار</a>

                                        @endif

                                </td>

                            </tr>

                                @endforeach

                            </tbody>
                        </table>
                        {{$books->render()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal" tabindex="-1" role="dialog" id="book_create">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">اضافه كتاب جديد</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card" >

                        <div class="card-body">
                            <form method="POST" action="{{url('/admin/books')}}" enctype="multipart/form-data" >
                                {{ csrf_field() }}



                                <!-- E-Cert -->
                                <div class="md-form">
                                    <label for="materialSubscriptionFormCertificate" style="font-size: 18px">أرفع الكتاب </label>
                                    <input type="file" name="book_link" id="materialSubscriptionFormCertificate"  class="form-control" accept="application/pdf" required>

                                </div>

                                <!-- Sign in button -->
                                <button type="submit" class="btn btn-success btn-rounded btn-block z-depth-0 my-4 waves-effect" >تحميل ورفع</button>

                            </form>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                </div>
            </div>
        </div>
    </div>


</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
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

    function popBookCreate() {
       $('#book_create').modal({'show': true});
    }
</script>


<!-- /Section -->@endsection