<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\Vendor;
use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorController extends Controller
{
    public function index()
    {

        $all_visitors = Visitor::all();
        return view('backend.visitor.index',compact('all_visitors'));
    }

    public function create()
    {
        $patients = Patient::all();
        return view('backend.visitor.create',compact('patients'));
    }

    public function store(Request $request)
    {
        // dd($request->all());

        $visitors                   = new Visitor();
        $visitors->name             = $request->name;
        $visitors->mobile           = $request->mobile;
        $visitors->reference_id     = $request->reference_id;
        $visitors->visited_date     = $request->visited_date;
        $visitors->check_in         = $request->check_in;
        $visitors->check_out        = $request->check_out;
        $visitors->save();

        return back();
    }

    public function edit($id)
    {
        return view('backend.visitor.edit');
    }

    public function update(Request $request, $id)
    {

    }

    public function destroy($id)
    {

    }

    public function reference_category_select_data(Request $request)
    {
        if ($request->reference_category == "patient"){
            $patients = Patient::all();
            return response()->json($patients);
        }elseif ($request->reference_category == "doctor"){
            $doctors = Doctor::all();
            return response()->json(['data' => $doctors]);
        }elseif ($request->reference_category == "management"){
//            $patients = Patient::all();
//            return response()->json(['data' => $patients]);
        }elseif ($request->reference_category == "vendor"){
            $vendors = Vendor::all();
            return response()->json(['data' => $vendors]);
        }else{
            return response()->json(['error' => 'error']);
        }
    }
}
