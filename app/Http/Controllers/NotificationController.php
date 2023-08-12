<?php
/**
 * Created by PhpStorm.
 * User: Omar_Raafat
 * Date: 12/26/2019
 * Time: 11:47 AM
 */

namespace App\Http\Controllers;


use App\Mail\sendMailable;
use Illuminate\Support\Facades\Mail;

class NotificationController extends Controller
{
    public function mailNotify($student_mail){
        Mail::to([$student_mail])->send(new sendMailable());
    }

}