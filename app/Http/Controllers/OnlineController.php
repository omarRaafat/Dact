<?php
/**
 * Created by PhpStorm.
 * User: Omar_Raafat
 * Date: 12/7/2019
 * Time: 4:46 AM
 */

namespace App\Http\Controllers;
use App\Course;

class OnlineController extends Controller
{
    public function view(){
        $courses = Course::where('is_online' , '1')->get();
        if($courses->count() > 0){
            return view('online')->with('courses' ,$courses );
        }else{
            return view('online')->with(['error' => 'THERE IS NO COURSE WITH THIS NAME' , 'courses' =>[] ]);
        }

    }

}