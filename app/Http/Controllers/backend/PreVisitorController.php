<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\PreVisitorRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PreVisitorController extends Controller
{
    public function preVisitorRegistration()
    {
        $getAllPreVisitorList = PreVisitorRegister::latest()->get();
        // dd($getAllPreVisitorList);
        return view('backend.preVisitorRegistration.index', compact('getAllPreVisitorList'));
    }

    public function preVisitorRequestList()
    {
        $preVisitorRequestList = DB::table('pre_visitor_requests')->latest()->get();

        return view('backend.preVisitorRequestList.index', compact('preVisitorRequestList'));
    }

    public function preVisitorRegistrationStore(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
            'category' => 'required',
            'visited_date' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
            'description' => 'required',
        ]);

        try {
            $visitors                       = new PreVisitorRegister();
            $visitors->name                 = $request->name;
            $visitors->mobile               = $request->mobile;
            $visitors->category             = $request->category;
            $visitors->visited_date         = date('Y-m-d', strtotime($request->visited_date));;
            $visitors->check_in             = $request->check_in;
            $visitors->check_out            = $request->check_out;
            $visitors->description          = $request->description;

            if ($visitors->save()) {
                return back()->with('success', 'Your information successfully saved.');
            } else {
                return back()->with('error', 'Something Error Found, Please try again');
            }
        } catch (\Exception $exception) {
            // dd($exception);
        }
    }
}
