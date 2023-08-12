<?php


namespace App\Http\Controllers;


//use Illuminate\Routing\Controller;

use App\StudentCertificate;
use Illuminate\Http\Request;

class CertificateController extends Controller
{
    public function certificate(Request $request){
        if($request->isMethod('post')){
            $certificate = StudentCertificate::where('serial_number' , 'like' , $request->cert_sn)->first();
            if($certificate){
                $certificate->date =  date('Y',strtotime($certificate->created_at));
                return view('certificate')->with('certificate' , $certificate);
            }else{
                return redirect()->back()->with('error' , 'there is no certificate with this number !');
            }
        }else{

            return view('certificate')->with('certificate' , []);
        }
    }


}