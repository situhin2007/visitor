<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Visitor;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $data['total_visitor'] = Visitor::count();
        $data['patients'] = Patient::all();

        return view('backend.dashboard',$data);
    }
}
