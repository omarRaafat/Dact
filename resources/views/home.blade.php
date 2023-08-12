@extends('layouts.app')

@section('content')

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">

    @if(session()->has('error'))
        <input type="hidden" value="1" id="e">
        <input type="hidden" id="message_error" value="{{session()->get('error')}}">

    @endif

    @if(session()->has('message'))
        <input type="hidden" value="1" id="m">
        <input type="hidden" id="message_success" value="{{session()->get('message')}}">

@endif

    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/jquery-3.3.1.slim.min.js"></script>
    <script src="/js/popper.min.js"></script>
    <script src="/js/main.js"></script><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

    <script>
        function getSearchValue(){

            var search_value = $('#search_value').val();
            var _token = $('input[name="_token"]').val();
            $.ajax({
                url: '/course/search/'+search_value,
                type: 'GET',
                success:function (data) {
                    if (data != '') {
                        $('#courses').empty();
                        for (var x=0;x<data.length; x++) {
                            if (data[x].is_active == 1) {
                                state = '<span id="state_1" class="available">available now</span>';
                            }
                            if (data[x].is_active == 0) {
                                state = '<span id="state_2" class="available" style="background-color: #761b18; font: bold">not available yet </span>';
                            }
                            $('#courses').append(' <div id="restaurant"  class="col-md-3"><div class="card mb-4"> <img id="rest_image" class="card-img-top" src="' + data[x].image + '" alt="Card image cap">' + state + '<div class="card-body"><h5 id="rest_name" class="card-title text-center">' + data[x].name + '</h5><hr><a href="#" class="btn btn-outline-info btn-sm">show details</a></div></div></div>')

                        }
                    }else{
                        toastr.error('لا يوجد مطعم بهذا الأسم');
                    }
                }
            });
        }
    </script>
    <script>
        if($('#e').val() == 1){

            toastr.error($('#message_error').val());
        }

        if($('#m').val() == 1){

            toastr.success($('#message_success').val());
        }
    </script>
@endsection
