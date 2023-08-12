@extends('layouts.app')@section('content')
    <section class="sptb">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 d-block mx-auto">
                    <div class="card">
                        <form class="card-body" method="POST"
                              action="{{ url('/course/register/'.$course_id) }}">                            @csrf
                            <input type="hidden" name="user" value="{{auth()->user()->id}}">
                            <div class="card-body">
                                <div class="card-header"><h3 class="card-title">Training Application Form</h3></div>
                                <div class="card-body">
                                    <div class="form-group"><label class="form-label">Full Name : *</label> <input
                                                type="text" name="full_name" class="form-control" required></div>
                                    <div class="form-group"><label class="form-label">Email : *</label> <input type="email"
                                                                                                           name="email"
                                                                                                           class="form-control"
                                                                                                           required>
                                    </div>
                                    <div class="form-group"><label class="form-label">Phone : *</label> <input type="text"
                                                                                                           name="phone"
                                                                                                           class="form-control"
                                                                                                           required>
                                    </div>
                                    <div class="form-group"><label class="form-label">Address : *</label> <input type="text"
                                                                                                             name="address"
                                                                                                             class="form-control" required>
                                    </div>
                                    <div class="form-group"><label class="form-label">Company : </label> <input type="text"
                                                                                                             name="company"
                                                                                                             class="form-control">
                                    </div>
                                    <div class="form-group"><label class="form-label">Suggestions</label> <textarea
                                                class="form-control" name="suggestions" rows="4"></textarea></div>
                                    <div class="form-group"><label class="form-label">How did you hear about the
                                            course?</label> <label class="custom-control custom-radio mr-4"> <input
                                                    type="radio" class="custom-control-input" value="1"
                                                    name="recommendation" checked> <span class="custom-control-label">Dact Page on Facebook</span>
                                        </label> <label class="custom-control custom-radio mr-4"> <input type="radio"
                                                                                                         class="custom-control-input"
                                                                                                         value="2"
                                                                                                         name="recommendation">
                                            <span class="custom-control-label">Recommendation</span> </label></div>
                                    <div class="form-group mt-6">
                                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>    <!-- /Section -->@endsection