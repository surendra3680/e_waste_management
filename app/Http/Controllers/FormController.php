<?php

namespace App\Http\Controllers;

use App\Models\EwasteModel;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function contactForm(Request $request)
    {
        $request->validate([

            'fname'=>['required'],
            'lname'=>['required'],
            'email'=>['required'],
            'mobile'=>['required'],
            'type_e'=>['required'],
            'weight_kg'=>['required'],
            'addr'=>['required'],
            'message'=>['required']
        ]);

        $data=new EwasteModel();
        $data->f_name=$request['fname'];
        $data->l_name=$request['lname'];
        $data->email=$request['email'];
        $data->mobile=$request['mobile'];
        $data->Type_Ewaste=$request['type_e'];
        $data->weight=$request['weight_kg'];
        $data->	addresss=$request['addr'];
        $data->message=$request['message'];
        $data->save();

        return back()->with('success','your response has been submitted successfully');

    }


}
