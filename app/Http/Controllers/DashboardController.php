<?php

namespace App\Http\Controllers;

use App\Models\EwasteModel;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('custom.dashboard');
    }
    public function profile()
    {
        return view('custom.profile');
    }
    public function  cdata()
    {
        $result=EwasteModel::all();
        return view('custom.c_data',['print'=>$result]);

    }

}
