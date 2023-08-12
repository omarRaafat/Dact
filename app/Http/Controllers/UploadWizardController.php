<?php
/**
 * Created by PhpStorm.
 * User: Omar_Raafat
 * Date: 12/2/2019
 * Time: 1:31 PM
 */

namespace App\Http\Controllers;


use App\Student;
use App\StudentCertificate;
use Illuminate\Http\Request;

class UploadWizardController extends Controller
{

    public function upload(Request $request){
//        return 'sdffd';
        $student_certificate = StudentCertificate::where('serial_number' , 'like' , $request->serial_number)->first();
        if($student_certificate){
            return redirect()->back()->with('error' , 'الرقم التسلسلي هذا موجود من قبل');
        }else{

            $certificate_request_file = $request->certificate;
            $certificate_request_file_name = time().$certificate_request_file->getClientOriginalName();
            $certificate_request_file->move('uploads/certificates/' ,$certificate_request_file_name);
            $student_certificate = new StudentCertificate();
            $student_certificate->serial_number = $request->serial_number;
            $student_certificate->certificate = 'uploads/certificates/'.$certificate_request_file_name;
            $student_certificate->save();

            return redirect()->back()->with('message' , 'تم رفع الشهاده بنجاح  ');
        }
    }

}