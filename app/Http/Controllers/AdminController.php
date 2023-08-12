<?php


namespace App\Http\Controllers;


use App\Book;
use App\Student;
use App\StudentCertificate;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{

    public function adminLoginView()
    {

        return view('auth.admin_login');
    }



    public function panel(){
        if(Auth::user()){

            return view('admin.dashboard')->with(['last_five_students' => Student::latest()->paginate(5),'users'=> User::count() ,'students' => Student::count()]);
        }else{
            return redirect('/admin_login');
        }
    }

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

            return view('admin.certificate')->with('certificate' , []);
        }
    }

    public function books(Request $request){
        if($request->isMethod('POST')){
            $request_file = $request->book_link;
            $request_file_name = time().$request_file->getClientOriginalName();
            $request_file_title = $request_file->getClientOriginalName();
            $request_file->move('uploads/books/' , $request_file_name);
            $request_array = [
                "title" => $request_file_title,
                'book_link' => "uploads/books/".$request_file_name
            ];

             Book::create($request_array);
             return redirect()->back()->with('message' , 'تم أضافه الكتاب بنجاح ');
        }else{
            return view('admin.books')->with('books' , Book::latest()->paginate(6));
        }
    }

    public function bookDelete($book_id){
        Book::find($book_id)->delete();
        return redirect()->back()->with('message' , 'تم حذف الكتاب بنجاح');
    }

    public function bookVisibility($book_id,$flag){
        Book::find($book_id)->update(['visibility' => $flag]);
        return redirect()->back()->with('message' , 'تم تغيير حاله عرض الكتاب بنجاح');
    }

}