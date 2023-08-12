<?php


namespace App\Http\Controllers;


use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ExamController extends Controller
{

    public function examView(){

        return view('exam-view');
    }

    public function examResult(Request $request){
        session()->regenerate();
        $result = 0;
        if($request->ans1 == 1)
            $result++;
        if($request->ans2 == 1)
            $result++;
        if($request->ans3 == 1)
            $result++;
        if($request->ans4 == 1)
            $result++;
        if($request->ans5 == 1)
            $result++;
        if($request->ans6 == 1)
            $result++;
        if($request->ans7 == 1)
            $result++;
        if($request->ans8 == 1)
            $result++;
        if($request->ans9 == 1)
            $result++;
        if($request->ans10 == 1)
            $result++;
        if($request->ans11 == 1)
            $result++;
        if($request->ans12 == 1)
            $result++;
        if($request->ans13 == 1)
            $result++;
        if($request->ans14 == 1)
            $result++;
        if($request->ans15 == 1)
            $result++;
        if($request->ans16 == 1)
            $result++;
        if($request->ans17 == 1)
            $result++;
        if($request->ans18 == 1)
            $result++;
        if($request->ans19 == 1)
            $result++;
        if($request->ans20 == 1)
            $result++;
        if($request->ans21 == 1)
            $result++;
        if($request->ans22 == 1)
            $result++;
        if($request->ans23 == 1)
            $result++;
        if($request->ans24 == 1)
            $result++;
        if($request->ans25 == 1)
            $result++;
        if($request->ans26 == 1)
            $result++;
        if($request->ans27 == 1)
            $result++;
        if($request->ans28 == 1)
            $result++;
        if($request->ans29 == 1)
            $result++;
        if($request->ans30 == 1)
            $result++;
        if($request->ans31 == 1)
            $result++;
        if($request->ans32 == 1)
            $result++;
        if($request->ans33 == 1)
            $result++;
        if($request->ans34 == 1)
            $result++;
        if($request->ans35 == 1)
            $result++;
        if($request->ans36 == 1)
            $result++;
        if($request->ans37 == 1)
            $result++;
        if($request->ans38 == 1)
            $result++;
        if($request->ans39 == 1)
            $result++;
        if($request->ans40 == 1)
            $result++;
        if($request->ans41 == 1)
            $result++;
        if($request->ans42 == 1)
            $result++;
        if($request->ans43 == 1)
            $result++;
        if($request->ans44 == 1)
            $result++;
        if($request->ans45 == 1)
            $result++;
        if($request->ans46 == 1)
            $result++;
        if($request->ans47 == 1)
            $result++;

  session()->put(['tested' => 1 , 'result' => $result]);
  $user=User::find(Auth::user()->id);
  $user->update(['test1'=>$result]);
        return redirect()->back();
    }

}