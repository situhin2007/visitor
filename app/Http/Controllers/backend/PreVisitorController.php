<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PreVisitorController extends Controller
{
   public function preVisitorRegistration()
   {
       return view('backend.preVisitorRegistration.index');
   }

   public function preVisitorRequestList()
   {
       return view('backend.preVisitorRequestList.index');
   }
}
