<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use App\Models\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    public function index()
    {
        $doctors = Doctor::all();
        return view('backend.doctors.index',compact('doctors'));
    }

    public function create()
    {
        return view('backend.doctors.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'mobile' => 'required',
            'department' => 'required',
            'designation' => 'required',
        ]);

        $doctors = new Doctor();
        $doctors->name = $request->name;
        $doctors->mobile = $request->mobile;
        $doctors->department = $request->department;
        $doctors->designation = $request->designation;
        $doctors->reference_no = rand(1000,9999);
        $doctors->save();

        return redirect('doctor/index');
    }
}
