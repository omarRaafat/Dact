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
<div class="col container" style="width: 700px;" >
    <div class="card" >
        <div class="card-header">
            <h4 class="card-title">استماره رفع شهادات الطلاب</h4>
        </div>
        <div class="card-body">
            <form method="POST" action="{{url('/upload/certificate')}}" enctype="multipart/form-data" >
                {{ csrf_field() }}
                <p>أستاذى ومعلمي وقائدي فضلا أرفع الشهاده بصيغه ال PNG او اى صيغه أخرى للصور.</p>

                <!-- Name -->
                <div class="md-form mt-3">
                    <label for="materialSubscriptionFormName" style="font-size: 18px">الرقم التسلسلي للشهاده :</label>
                    <input type="text" name="serial_number" autocomplete="off" id="materialSubscriptionFormName" class="form-control" required>

                </div>

                <!-- E-Cert -->
                <div class="md-form">
                    <label for="materialSubscriptionFormCertificate" style="font-size: 18px">الشهاده </label>
                    <input type="file" name="certificate" id="materialSubscriptionFormCertificate"  class="form-control" required>

                </div>

                <!-- Sign in button -->
                <button type="submit" class="btn btn-success btn-rounded btn-block z-depth-0 my-4 waves-effect" >تحميل ورفع</button>

            </form>
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
</script>


<!-- /Section -->@endsection