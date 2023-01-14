<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeControle extends Controller
{
    public  function home()
    {
        return view('master.master');
    }
    public  function galary()
    {
        return view('partial.galary');
    }
    public  function about()
    {
        return view('partial.about');
    }
    public  function form()
    {
        return view('partial.form');
    }

}
