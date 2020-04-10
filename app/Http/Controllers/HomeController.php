<?php

namespace App\Http\Controllers;

use App\Fee;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('jeremie.welcome');
    }
    public function display()
    {
        $fees = Fee::has('students')->get();
        return view('jeremie.feepayments')->with('fees',$fees);
    }
}
