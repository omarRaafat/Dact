<?php

namespace App\Http\Controllers;

use App\Book;
use App\Mail\SendMail;

use Illuminate\Http\Request;
use App\Course;use App\Mail\sendMailable;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
//    public function __construct()
//    {
//        $this->middleware(['auth' , 'verified']);
//    }
    public function index()
    {
        return redirect('/');
    }

    public function admin()
    {

        return view('auth.admin_login');
    }

    public function support(Request $request){
        try {

            Mail::to(['mohamed.gomaa311@gmail.com'])->send(new SendMail($request->name ,$request->email , $request->subject , $request->message));
            return redirect('/')->with('message' , 'mail sent successfully');
        }catch (\Exception $exception){

            return redirect('/')->with('error' , $exception);
        }




    }

    public function books(){
        return view('books')->with('books' , Book::where('visibility',1)->latest()->paginate(6));
    }

    public function bookPreview($book_title , $book_id){
        return view('book-preview')->with('book' , Book::find($book_id));
    }
}
