<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LogOutController extends Controller
{
    public function passwordChange(Request $request)
    {

        $user=Auth::user();


        $request->validate([
            'password'=>['required'],
            'new_password'=>['required','confirmed'],

        ]);

        if (Hash::check($request->password,$user->password))
        {
            $user->fill([
                'password'=>Hash::make($request->new_password)

            ])->save();

            $request->session()->flush('success','password change');

            Auth::logout();

            return to_route('login');
        }else
        {
            $request->session()->flush('error','password not change');
            return back();

        }


    }
    public  function logout()
    {
        Auth::logout();
        return view('custom.login');
    }
}
