<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontController extends Controller
{
    public function home()
    {
        return view('index');
    }
    public function about()
    {
        return view('front.about');
    }
    public function department()
    {
        return view('front.department');
    }
    public function doctor()
    {
        return view( 'front.doctor');
    }
    public function contact()
    {
        return view( 'front.contact');
    }
    public function blog()
    {
        return view( 'front.blog');
    }
}
