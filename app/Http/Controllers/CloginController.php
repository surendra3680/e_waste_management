<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CloginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest');
    }

    public function Clogin()
    {
        return view('custom.login');
    }

    public function sendData(Request $request)
    {

        $request->validate([
            'mobile' => ['required'],
            'password' => ['required']
        ]);
//           return to_route('dashboard');

//
////        //check max attept
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }
//        //attept to login
//
        if (Auth::attempt(['mobile' => $request->mobile, 'password' => $request->password])) {
            return to_route('dashboard');
            return $this->sendLoginResponse($request);
        } else {
            return redirect()->back()->with('error', "Please cheack your details");

        }

    }
}
