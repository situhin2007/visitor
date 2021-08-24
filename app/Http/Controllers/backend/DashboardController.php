<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Visitor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total_visitor = Visitor::count();

        return view('backend.dashboard',compact('total_visitor'));
    }
}
