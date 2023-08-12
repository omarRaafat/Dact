<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    // TO OVERRIDE AUTH CHECK LOGIC
    public function login(Request $request)
    {

        if(Auth::attempt(['email' => $request->email, 'password' => $request->password , 'type' => 0])) {
            return redirect('/home');
        }else if(Auth::attempt(['email' => $request->email, 'password' => $request->password , 'type' => 1])) {
            return redirect('/admin');

        }
        else {
            $this->incrementLoginAttempts($request);
            return redirect()->back()->with('error' ,"البريد الألكتروني او كلمه المرور غير صحيحه");
        }

    }
}
