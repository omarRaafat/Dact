@extends('layouts.admin')
@section('content')
{{--    <div class="panel-header panel-header-lg">--}}
{{--        <canvas id="bigDashboardChart"></canvas>--}}
{{--    </div>--}}
            <div class="content">
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h4 class="card-title text-center">عدد الزوار لدينا</h4>
                            </div>
                                <div class="card-body text-center">
                                    <span style="font-size: 50px">{{$users}}</span>
                                </div>



                            <div class="card-footer">
                                <div class="stats">
                                    <i class="now-ui-icons arrows-1_refresh-69"></i>  تم التحديث الآن 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h4 class="card-title text-center">جميع الزيارات شهريا</h4>

                            </div>
                            <div class="card-body text-center">
                                <span style="font-size: 50px">172</span>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="now-ui-icons arrows-1_refresh-69"></i>  تم التحديث الآن 
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="card card-chart">
                            <div class="card-header">

                                <h4 class="card-title text-center">أجمالى الطلاب المسجلين لدينا</h4>
                            </div>
                            <div class="card-body text-center">
                                <span style="font-size: 50px">{{$students}}</span>
                            </div>
                            <div class="card-footer">
                                <div class="stats">
                                    <i class="now-ui-icons ui-2_time-alarm"></i> آخر 7 أيام
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                  <div class="col">
                      <div class="card">
                        <div class="card-header">
                            <h5 class="card-category">قائمه أخر  تسجيلات للطلبه لدينا </h5>
                            <h4 class="card-title">   إحصائيات الطلاب  أسبوعيا</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                              <table class="table">
                                <thead class=" text-primary">
                                  <th class="text-right">
                                    الإسم
                                  </th>
                                  <th class="text-right">
                                    رقم الهتاف
                                  </th>
                                  <th class="text-right">
                                    البريد الألكتروني
                                  </th>
                                  <th class="text-right">
                                   العنوان
                                  </th>
                                </thead>
                                <tbody>


                                 @foreach($last_five_students as $student)
                                     <tr>
                                         <td>{{$student->full_name}}</td>
                                         <td>{{$student->phone}}</td>
                                         <td>{{$student->email}}</td>
                                         <td>{{$student->address}}</td>
                                     </tr>

                                     @endforeach


                                </tbody>
                              </table>
                            </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>

            @endsection