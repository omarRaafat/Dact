
@extends('layouts.admin')

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
    <div class="container" >
    <!-- Material form subscription -->
    <div class="card" style="width: 50% ;margin: 0 auto">

        <h5 class="card-header info-color white-text text-center py-4">
            <strong>Student Certificate</strong>
        </h5>

        <!--Card content-->
        <div class="card-body px-lg-5  text-center" style="color: #757575;">

            <!-- Form -->

            <form method="POST" action="{{url('/upload/certificate')}}" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <p>Upload Student Certificate ( NOTE: it will take between 5 upTo 10 minutes to be available on server).</p>

                <!-- Name -->
                <div class="md-form mt-3">
                    <input type="text" name="serial_number" autocomplete="off" id="materialSubscriptionFormName" class="form-control" required>
                    <label for="materialSubscriptionFormName">Serial Number</label>
                </div>

                <!-- E-Cert -->
                <div class="md-form">
                    <input type="file" name="certificate" id="materialSubscriptionFormCertificate"  class="form-control" required>
                    <label for="materialSubscriptionFormCertificate">Certificate File</label>
                </div>

                <!-- Sign in button -->
                <button type="submit" class="btn btn-outline-info btn-rounded btn-block z-depth-0 my-4 waves-effect" >UPLOAD</button>

            </form>
            <!-- Form -->

        </div>

    </div>
    <!-- Material form subscription -->
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
    </script>



@endsection