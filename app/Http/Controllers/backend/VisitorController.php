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
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
//            'reference_id' => 'required|unique:visitors',
            'reference_category' => 'required',
            'visited_ref_name' => 'required',
            'visited_date' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
        ]);

        try {
            $visitors                       = new Visitor();
            $visitors->name                 = $request->name;
            $visitors->mobile               = $request->mobile;
            $visitors->reference_id         = $request->reference_id;
            $visitors->reference_category   = $request->reference_category;
            $visitors->visited_ref_name     = $request->visited_ref_name;
            $visitors->visited_date         = date('Y-m-d', strtotime($request->visited_date));;
            $visitors->check_in             = $request->check_in;
            $visitors->check_out            = $request->check_out;
            $visitors->save();

            if ($visitors->save()) {
                return redirect('visitor/index')->with('success', 'Visitor successfully saved.');
            } else {
                return back()->with('error', 'Something Error Found, Please try again');
            }
        }catch (\Exception $exception){
            // dd($exception);
        }
    }

    public function edit($id)
    {
        $visitor = Visitor::findOrFail($id);
        return view('backend.visitor.edit',compact('visitor'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
//            'reference_id' => 'required|unique:visitors',
            'reference_category' => 'required',
            'visited_ref_name' => 'required',
            'visited_date' => 'required',
            'check_in' => 'required',
            'check_out' => 'required',
        ]);

        try {
            $visitors                       = Visitor::findOrFail($id);
            $visitors->name                 = $request->name;
            $visitors->mobile               = $request->mobile;
            $visitors->reference_id         = $request->reference_id;
            $visitors->reference_category   = $request->reference_category;
            $visitors->visited_ref_name     = $request->visited_ref_name;
            $visitors->visited_date         = date('Y-m-d', strtotime($request->visited_date));;
            $visitors->check_in             = $request->check_in;
            $visitors->check_out            = $request->check_out;

            if ($visitors->save()) {
                return redirect('visitor/index')->with('success', 'Visitor successfully updated.');
            } else {
                return back()->with('error', 'Something Error Found, Please try again');
            }
        }catch (\Exception $exception){
            //dd($exception);
        }
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

    public function reference_id_select_data(Request $request)
    {
        if ($request->reference_category == "patient"){
            $patients = Patient::where('reference_no',$request->reference_id)->first();
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
