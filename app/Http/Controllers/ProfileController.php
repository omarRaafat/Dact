<?php
/**
 * Created by PhpStorm.
 * User: Omar_Raafat
 * Date: 12/26/2019
 * Time: 1:20 PM
 */

namespace App\Http\Controllers;



use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public  function  Profile(Request $request){

        if($request->isMethod('POST')){

            $user = User::find(Auth::user()->id);
             if($request->username){
                 $user->name = $request->username;
             }
            if($request->email){
                $user->email = $request->email;
            }
            if($request->password){
                 if($request->password == $request->cpassword){
                     $user->password = Hash::make($request->password);
                 }else{
                     return redirect()->back()->with('error' , 'PASSWORD DOES NOT MATCH');
                 }

            }
             $user->save();
            if($user){
                return redirect('/')->with('message' , 'INFO UPDATED SUCCESSFULLY');

            }else{
                return redirect()->back()->with('error' , 'ERROR OCCURED');
            }

        }else{
            return view('profile')->with('user' , Auth::user());
        }

    }

}