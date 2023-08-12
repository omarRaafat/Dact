<?php
/**
 * Created by PhpStorm.
 * User: Omar_Raafat
 * Date: 11/27/2019
 * Time: 4:42 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class StudentCourses extends Model
{
    protected $table = 'student_courses';
    protected $fillable = [
        'student_id', 'course_id', 'suggestions	'
    ];

    public function student(){
        return $this->belongsTo('App\Student' , 'student_id');
    }

    public function course(){
        return $this->belongsTo('App\Course' , 'course_id');
    }
}