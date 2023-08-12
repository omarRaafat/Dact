<?php
/**
 * Created by PhpStorm.
 * User: Omar_Raafat
 * Date: 11/24/2019
 * Time: 8:12 PM
 */

namespace App\Http\Controllers;


use App\Course;
use App\Student;
use App\StudentCourses;
use Illuminate\Http\Request;
use Auth;
class CourseController extends Controller
{

    public function courses(){
        $courses = Course::all();
        return view('courses')->with('courses' ,$courses);
    }

    public function courseDetails($course_id){
        $course = Course::find($course_id);

        if(Auth::user()){
            $student = Student::where('user' , Auth::user()->id)->first();
            if($student) {


                if ($registered = StudentCourses::where('student_id', $student->id)->where('course_id', $course->id)->first()) {

                    return view('course_details')->with('course', $course)->with('check', 1);
                } else {

                    return view('course_details')->with('course', $course)->with('check', 0);
                }
            }else{
                return view('course_details')->with('course' , $course)->with('check', '');
            }
        }else{
            return view('course_details')->with('course' , $course);
        }


    }

    public function search(Request $request){

        $courses = Course::where('name' ,'like', '%'. $request->search_value.'%')->get();
        if($courses->count() > 0){
            return view('courses')->with('courses' ,$courses );
        }else{
            return view('courses')->with(['error' => 'THERE IS NO COURSE WITH THIS NAME' , 'courses' =>[] ]);
        }
    }

    public function courseRegister(Request $request , $course_id){
        if($request->isMethod('POST')){
            $student_info  = $request->only('full_name',  'phone' ,  'email',   'company' ,  'address' , 'recommendation' , 'user' );
            $student = Student::where('full_name' , 'like' , $student_info['full_name'])->orWhere('phone' , $student_info['phone'])->orWhere('email' , $student_info['email'])->first();
            if($student == null) {

                $student = Student::create($student_info);
                $student->save();

            }
            $student_course = StudentCourses::where('student_id' , $student->id)->where('course_id' ,$course_id )->first();
            if($student_course == null){
                $registration_info = $request->only('suggestions');
                $registration_info['student_id'] = $student->id;
                $registration_info['course_id'] = $course_id;
                $student_courses = StudentCourses::create($registration_info);
                $student_courses->save();
                if($student_courses){
                    app('App\Http\Controllers\NotificationController')->mailNotify($student->email);

                    return redirect('/courses')->with('message' , 'you have been registered successfully');
                }else{
                    return redirect('/courses')->with('error' , 'there is load on registration , please try again later');

                }
            }else{
                return redirect('/courses')->with('error' , 'your info registered before for this course');

            }



        }else{

            return view('course_registration')->with('course_id' , $course_id);
        }






    }

}