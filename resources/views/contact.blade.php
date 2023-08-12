@extends('layouts.subApp')@section('content')        <!-- /Section -->        <!-- Section -->
<section class="sptb">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <iframe class="iframe"
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1727.4901243856386!2d31.137396012506983!3d30.00872351687991!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14584581f471c49d%3A0x15956ca31f78f077!2sBelladona%20co.%20head%20office!5e0!3m2!1sar!2seg!4v1580912568713!5m2!1sar!2seg"></iframe>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <iframe class="iframe"
                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6822.634197709346!2d29.958109000000004!3d31.239644000000002!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14f5c52746dc12c5%3A0x68ec469d88f713c!2s10%20Mohammed%20Mokbel%2C%20Fleming%2C%20Qism%20El-Raml%2C%20Alexandria%20Governorate!5e0!3m2!1sen!2seg!4v1580988313635!5m2!1sen!2seg"></iframe>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <form action="{{route('support')}}" method="POST">
                        @csrf
                        <div class="card-header"><h3 class="card-title">Get in Touch</h3></div>
                        <div class="form-group"><input type="text" name="name" class="form-control" placeholder="Name" required></div>
                        <div class="form-group"><input type="email"  name="email" class="form-control" placeholder="Email" required></div>
                        <div class="form-group"><input type="text" name="subject" class="form-control" placeholder="Subject" required></div>
                        <div class="form-group"><textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                        </div>
                        <button type="submit" onclick="support()" class="btn btn-primary btn-block" style="">Send Message</button>
                    </form>

                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-header"><h3 class="card-title">Contact Info</h3></div>
                    <div class="card-body p-0">
                        <div class="list-catergory">
                            <div class="item-list">
                                <ul class="list-group">
                                    <!-- <li class="list-group-item">                                                <i class="fa fa-home bg-primary mr-3"></i>                                                <span href="#" class="text-dark font-weight-semibold">1 El Kawther Street - 1st Floor Flat 3</span>                                            </li> -->
                                    <li class="list-group-item"><i class="fa fa-home bg-primary mr-3 mb-4"
                                                                   style="float: left;"></i>
                                        <h4 class="text-dark font-weight-semibold mt-1">Headquarter</h4>
                                        <div class="clearfix"></div>
                                        <span href="#" class="text-dark font-weight-semibold">1 El Kawther St. - El Mariouteya Faisal - Beside Belladona Factory For Clothes In Front Of Nazlet El Mariouteya - 1st Floor Flat 3</span>
                                    </li>
                                    <li class="list-group-item"><i class="fa fa-map-marker bg-primary mr-3 mb-4"
                                                                   style="float: left;"></i>
                                        <h4 class="text-dark font-weight-semibold mt-1">Branch</h4>
                                        <div class="clearfix"></div>
                                        <span href="#" class="text-dark font-weight-semibold">10 Mohammed Mokbel - Alexandria</span>
                                    </li>
                                    <li class="list-group-item"><i class="fa fa-envelope bg-primary mr-3"></i> <a
                                                href="mailto:dact@academic.com" class="text-dark font-weight-semibold">dact@academic.com</a>
                                    </li>
                                    <li class="list-group-item"><i class="fa fa-phone bg-primary mr-3"></i> <a
                                                href="tel:+ 0115 777 1461" class="text-dark font-weight-semibold"> +
                                            0115 777 1461</a></li>
                                    <li class="list-group-item border-bottom-0"><a  href="https://www.facebook.com/DACT2020/" target="_blank"><i class="fa fa-facebook facebook-bg mr-3"></i></a>
                                        <a ><i class="fa fa-twitter twitter-bg mr-3"></i></a>
                                        <a href="#"><i class="fa fa-youtube-play youtube-bg mr-3"></i></a>
                                        <a href="https://www.linkedin.com/company/deming-company-dact" target="_blank" ><i class="fa fa-linkedin linkedin-bg"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>        <!-- /Section -->        <!-- Back to top -->        <a href="#top" id="back-to-top"><i
            class="fa fa-long-arrow-up"></i></a>@endsection