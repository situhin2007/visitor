<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Patient;
use App\Models\Visitor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        $data['total_visitor'] = Visitor::count();
        $data['patients'] = Patient::all();
        $data['getPassIssueData'] = DB::table('get_pass')->where('status',0)->latest()->get();
        $data['getPassIssueDataVisited'] = DB::table('get_pass')->where('status',1)->latest()->get();
        $data['idCardInfo'] = DB::table('id_card_info')->where('status',0)->get();
        // dd($data['getPassIssueData']);

        return view('backend.dashboard',$data);
    }
}
