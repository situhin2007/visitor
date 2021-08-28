<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontHome');
    }
    public function preVisitor()
    {
        return view('frontHome.preVisitor');
    }
    public function visitorRegistration ()
    {
        return view('frontHome.visitorRegistration ');
    }
}
