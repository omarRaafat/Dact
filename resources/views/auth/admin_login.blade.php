<!DOCTYPE html>
<html  lang="ar">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>تسجيل دخول لوحه التحكم</title>
    <link href="/css/styles.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/js/all.min.js" crossorigin="anonymous"></script>
</head>
<body class="bg-warning">
<div id="layoutAuthentication">
    <div id="layoutAuthentication_content">
        <main>
            <div class="container" >


                <div class="row justify-content-center">
                    <div class="col-lg-5">

                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            @if(session()->has('error'))
                                <div class="alert alert-danger">
                                    <span>{{session()->get('error')}}</span>
                                </div>
                            @endif
                            <div class="card-header"><h3 class="text-center font-weight-light my-4">تسجيل دخول </h3></div>
                            <div class="card-body" >
                                <form method="POST" action="{{ route('login') }}" dir="rtl">
                                    @csrf
                                    <div class="form-group"><label class="small mb-1" for="inputEmailAddress" style="margin-left:300px">البريد الألكتروني</label><input  id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus /></div>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                    <div class="form-group"><label class="small mb-1" for="inputPassword" style="margin-left:320px">الرقم السري</label><input  id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"/></div>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror

                                    <div class="form-group ">

                                        <button type="submit" class="btn btn-primary" style="margin-left:150px">
                                            تسجيل دخول
                                        </button>



                                    </div>
                                </form>
                            </div>
                            <!--<div class="card-footer text-center">-->
                            <!--    <div class="small"><a href="register.html">Need an account? Sign up!</a></div>-->
                            <!--</div>-->
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

</div>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="../../../../public/js/scripts.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var elements = document.getElementsByTagName("INPUT");
        for (var i = 0; i < elements.length; i++) {
            elements[i].oninvalid = function(e) {
                e.target.setCustomValidity("");
                if (!e.target.validity.valid) {
                    e.target.setCustomValidity("برجاء ملئ هذا الحلق");
                }
            };
            elements[i].oninput = function(e) {
                e.target.setCustomValidity("");
            };
        }
    })
</script>
</body>
</html>
